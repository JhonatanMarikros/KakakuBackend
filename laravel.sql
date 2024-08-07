PGDMP                      |            laravel    16.3    16.3 L    K           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            L           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            M           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            N           1262    17098    laravel    DATABASE     �   CREATE DATABASE laravel WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE laravel;
                postgres    false            �            1259    17168    admins    TABLE     D  CREATE TABLE public.admins (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    is_admin boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.admins;
       public         heap    postgres    false            �            1259    17167    admins_id_seq    SEQUENCE     v   CREATE SEQUENCE public.admins_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.admins_id_seq;
       public          postgres    false    229            O           0    0    admins_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.admins_id_seq OWNED BY public.admins.id;
          public          postgres    false    228            �            1259    17190    coupons    TABLE     +  CREATE TABLE public.coupons (
    id bigint NOT NULL,
    nama character varying(255) NOT NULL,
    deskripsi text,
    jumlah integer NOT NULL,
    gambar character varying(255),
    claimed_by bigint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.coupons;
       public         heap    postgres    false            �            1259    17189    coupons_id_seq    SEQUENCE     w   CREATE SEQUENCE public.coupons_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.coupons_id_seq;
       public          postgres    false    233            P           0    0    coupons_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.coupons_id_seq OWNED BY public.coupons.id;
          public          postgres    false    232            �            1259    17125    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    17124    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221            Q           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    17149 	   locations    TABLE     C  CREATE TABLE public.locations (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    description text,
    image character varying(255),
    open time(0) without time zone,
    close time(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.locations;
       public         heap    postgres    false            �            1259    17148    locations_id_seq    SEQUENCE     y   CREATE SEQUENCE public.locations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.locations_id_seq;
       public          postgres    false    225            R           0    0    locations_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.locations_id_seq OWNED BY public.locations.id;
          public          postgres    false    224            �            1259    17158    makanans    TABLE     |  CREATE TABLE public.makanans (
    id bigint NOT NULL,
    nama character varying(255) NOT NULL,
    harga numeric(10,2) NOT NULL,
    deskripsi text NOT NULL,
    gambar character varying(255) NOT NULL,
    kategori character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT makanans_kategori_check CHECK (((kategori)::text = ANY ((ARRAY['Maincourse'::character varying, 'Pasta'::character varying, 'Bowl Series'::character varying, 'French Fries Series'::character varying, 'Finger Food'::character varying, 'Sweet'::character varying])::text[])))
);
    DROP TABLE public.makanans;
       public         heap    postgres    false            �            1259    17157    makanans_id_seq    SEQUENCE     x   CREATE SEQUENCE public.makanans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.makanans_id_seq;
       public          postgres    false    227            S           0    0    makanans_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.makanans_id_seq OWNED BY public.makanans.id;
          public          postgres    false    226            �            1259    17100 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    17099    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            T           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    17180    minumans    TABLE     �  CREATE TABLE public.minumans (
    id bigint NOT NULL,
    nama character varying(255) NOT NULL,
    harga numeric(10,2) NOT NULL,
    deskripsi text NOT NULL,
    gambar character varying(255) NOT NULL,
    kategori character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT minumans_kategori_check CHECK (((kategori)::text = ANY ((ARRAY['Signature Coffee'::character varying, 'Coffee Based'::character varying, 'Hand Drip Coffee'::character varying, 'Signature Mocktail'::character varying, 'Treat Yourself'::character varying, 'Non Coffee based'::character varying, 'Tea Based'::character varying])::text[])))
);
    DROP TABLE public.minumans;
       public         heap    postgres    false            �            1259    17179    minumans_id_seq    SEQUENCE     x   CREATE SEQUENCE public.minumans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.minumans_id_seq;
       public          postgres    false    231            U           0    0    minumans_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.minumans_id_seq OWNED BY public.minumans.id;
          public          postgres    false    230            �            1259    17117    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �            1259    17137    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    17136    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            V           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    17107    users    TABLE       CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    17106    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            W           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            �           2604    17171 	   admins id    DEFAULT     f   ALTER TABLE ONLY public.admins ALTER COLUMN id SET DEFAULT nextval('public.admins_id_seq'::regclass);
 8   ALTER TABLE public.admins ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            �           2604    17193 
   coupons id    DEFAULT     h   ALTER TABLE ONLY public.coupons ALTER COLUMN id SET DEFAULT nextval('public.coupons_id_seq'::regclass);
 9   ALTER TABLE public.coupons ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232    233            ~           2604    17128    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    17152    locations id    DEFAULT     l   ALTER TABLE ONLY public.locations ALTER COLUMN id SET DEFAULT nextval('public.locations_id_seq'::regclass);
 ;   ALTER TABLE public.locations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    225    225            �           2604    17161    makanans id    DEFAULT     j   ALTER TABLE ONLY public.makanans ALTER COLUMN id SET DEFAULT nextval('public.makanans_id_seq'::regclass);
 :   ALTER TABLE public.makanans ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    227    227            |           2604    17103    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �           2604    17183    minumans id    DEFAULT     j   ALTER TABLE ONLY public.minumans ALTER COLUMN id SET DEFAULT nextval('public.minumans_id_seq'::regclass);
 :   ALTER TABLE public.minumans ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    231    231            �           2604    17140    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223            }           2604    17110    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            D          0    17168    admins 
   TABLE DATA           ]   COPY public.admins (id, name, email, password, is_admin, created_at, updated_at) FROM stdin;
    public          postgres    false    229   3\       H          0    17190    coupons 
   TABLE DATA           j   COPY public.coupons (id, nama, deskripsi, jumlah, gambar, claimed_by, created_at, updated_at) FROM stdin;
    public          postgres    false    233   ]       <          0    17125    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   �]       @          0    17149 	   locations 
   TABLE DATA           f   COPY public.locations (id, name, description, image, open, close, created_at, updated_at) FROM stdin;
    public          postgres    false    225   �]       B          0    17158    makanans 
   TABLE DATA           h   COPY public.makanans (id, nama, harga, deskripsi, gambar, kategori, created_at, updated_at) FROM stdin;
    public          postgres    false    227   c^       7          0    17100 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   �`       F          0    17180    minumans 
   TABLE DATA           h   COPY public.minumans (id, nama, harga, deskripsi, gambar, kategori, created_at, updated_at) FROM stdin;
    public          postgres    false    231   �a       :          0    17117    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    219   d       >          0    17137    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   ,d       9          0    17107    users 
   TABLE DATA           R   COPY public.users (id, name, email, password, created_at, updated_at) FROM stdin;
    public          postgres    false    218   Id       X           0    0    admins_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.admins_id_seq', 4, true);
          public          postgres    false    228            Y           0    0    coupons_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.coupons_id_seq', 3, true);
          public          postgres    false    232            Z           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            [           0    0    locations_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.locations_id_seq', 4, true);
          public          postgres    false    224            \           0    0    makanans_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.makanans_id_seq', 9, true);
          public          postgres    false    226            ]           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 9, true);
          public          postgres    false    215            ^           0    0    minumans_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.minumans_id_seq', 9, true);
          public          postgres    false    230            _           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            `           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 3, true);
          public          postgres    false    217            �           2606    17178    admins admins_email_unique 
   CONSTRAINT     V   ALTER TABLE ONLY public.admins
    ADD CONSTRAINT admins_email_unique UNIQUE (email);
 D   ALTER TABLE ONLY public.admins DROP CONSTRAINT admins_email_unique;
       public            postgres    false    229            �           2606    17176    admins admins_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.admins
    ADD CONSTRAINT admins_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.admins DROP CONSTRAINT admins_pkey;
       public            postgres    false    229            �           2606    17197    coupons coupons_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.coupons
    ADD CONSTRAINT coupons_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.coupons DROP CONSTRAINT coupons_pkey;
       public            postgres    false    233            �           2606    17133    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            �           2606    17135 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            �           2606    17156    locations locations_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.locations
    ADD CONSTRAINT locations_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.locations DROP CONSTRAINT locations_pkey;
       public            postgres    false    225            �           2606    17166    makanans makanans_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.makanans
    ADD CONSTRAINT makanans_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.makanans DROP CONSTRAINT makanans_pkey;
       public            postgres    false    227            �           2606    17105    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            �           2606    17188    minumans minumans_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.minumans
    ADD CONSTRAINT minumans_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.minumans DROP CONSTRAINT minumans_pkey;
       public            postgres    false    231            �           2606    17123 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    219            �           2606    17144 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            �           2606    17147 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            �           2606    17116    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            �           2606    17114    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            �           1259    17145 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            �           2606    17198 "   coupons coupons_claimed_by_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.coupons
    ADD CONSTRAINT coupons_claimed_by_foreign FOREIGN KEY (claimed_by) REFERENCES public.users(id) ON DELETE SET NULL;
 L   ALTER TABLE ONLY public.coupons DROP CONSTRAINT coupons_claimed_by_foreign;
       public          postgres    false    218    4750    233            D   �   x�m���@Ek�+,h���N��qa�`l��B�(|��Q�{�ӜC����zX��Te%�[��������ڥ-����)%O_aZ=鹡�Rؑ��:��B]�lr0�S�NA��T�	�C0�����]�]�w�8h��n��W���Ԩ��k뮑�{�6����*&?	��&1���agHc      H   �   x�m�=�0����W�ű��6��X:8� n]R(5֤%1�_D�L�p^	ǰ��)���^�K!�q�[r�7�� k`bE�RIU���g�fTe\�T�����F�D�f��u19�m\V�L;<�{Z����4$K�_����ԥ�gbȅT�3�      <      x������ � �      @   �   x�3��N�N�.Up�OKKMUPS�ILNU�Up��s���(���pC������b�g����T��2_C���B�7o��`���4�$S�r��\���V@�idc�����+�Z�[[b����� %�*u      B   d  x�}��r�@�u��I���CM� ��fs�VZ�Q.�>�0&�d�^��>_�}Јfح3lVE߮{�GC��R����hR>�Ƭ=/����t�F�^�M�:�`���_���=� ��)���1yQ��{w��ISM�we��(AH��4C��O�4�//�5eO|��nE�9��rnxr���Sn����q���v��)jW�Ih������6T� A� ��.Oz96�w��yR��31���A�d�ͤ�M��,|�W��Ey]�� kߕq2�
¢[%��y5׆�Յ�� �b���\g���7��<�~�-�k�)L���}���:�F�h�ؕq
Z�m��H�(�AE� ~ 3`����k"FBLSg9���A�)\8���yt���v;wf��;�m�nG������C��m~��a���YX�R��He)HL�ѥ���,�ӂ��q�uC���Ip����5������S���(%�P��7@�Uςڧg�{�i��K��z�'U���%?�&�������4A�ʸ���e1�,��}<�����o�$���K�v빲L�����o��.��2�K۟�E���^���veܟ{����U�      7   �   x�]�I�0�u9L���.�,\�2��^���W��nR�B�w�,L�qu�8��|�L�.p&��viqa���y��|�(*��%��n�_��\�|+Q;��'�c'��a���tHʐ)P��:��%k�w6�ŉB��D~��z�(�e�!����R;v���,��yr���1�ZG[m�J)k�:��>�Y�} ���      F   U  x����r�@�kx
^ 	���E� *
���fl�EO?�T2�L�?E�q��f>f&(����
S���g����L��6�����B\�p9!ﭴmB�Sv�"�Z��uQ�E�E�T��眄�:	��;<�)�B����� ~Ĳ#��hx�y��$���B$_.�Z�	4���h~,mW�oA�6B�6�K��������KFsT�q�̏Pw�N�PQҠ��\��EG�&���~DP�R#EkV�z�ْV�����1oE��cBp�?�.�Sj��0a���qF~`�Äl�<��(�2�:��O,���z�[����	ƽ�u�T(N� n�IC-P��0�4C��1����:�M-.=e��6�f�,t��ThM��m�H��x���W�]`T1��.J����#� �d�x-�����k��!�E�3K=W���Ej��f�(��{&6�6�sԾ���!�3r���?@�DKW���Q����Bukcn����dɅ�Zp��Dޙ)�3�u�qu���G�z��[��3��-v����o?[��cƤ�!�Cs��3��5Ê�Z؂<����*O�;^�N� �C�����?��Ob      :      x������ � �      >      x������ � �      9   �   x�m���0 Eg����T�LBLD%._UJ���wИ�Xnn�r�e���s�{�E3%�Ԧ�ͥ��B�,�$گ}g%h�]f8��A�p��&N�cx����5��A0�M�n�aQ��\��1@��
~���H^�S��ߔѩ5���uDv��.��fz\Զ�h���R�֪b��049����C븶��b` 6K�     