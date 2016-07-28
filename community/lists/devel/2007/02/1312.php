<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 16 16:48:52 2007" -->
<!-- isoreceived="20070216214852" -->
<!-- sent="Fri, 16 Feb 2007 16:46:44 -0500" -->
<!-- isosent="20070216214644" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688" -->
<!-- id="F01162DD-94F8-4359-B6E3-2D128111CD66_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1B14E3A-8995-428C-92D6-D9C0064D0E06_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-16 16:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1313.php">Karl Dockendorf: "[OMPI devel] mpicc Xcode 2.3 integration"</a>
<li><strong>Previous message:</strong> <a href="1311.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<li><strong>In reply to:</strong> <a href="1311.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Missed that one. Thanks. Update and it should be fixed.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 16, 2007, at 4:38 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think 'HKEY' is defined on all platforms (at least I'm
</span><br>
<span class="quotelev1">&gt; getting compile errors from it on a Sun box). should the function
</span><br>
<span class="quotelev1">&gt; definition:
</span><br>
<span class="quotelev2">&gt;&gt; +static int read_keys_from_registry(HKEY hKey, char *sub_key, char
</span><br>
<span class="quotelev2">&gt;&gt; *current_key);
</span><br>
<span class="quotelev1">&gt; be changed some how?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2007, at 1:39 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-02-16 13:39:40 EST (Fri, 16 Feb 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 13688
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; On Windows allow the MCA params to come from the Windows Registry.
</span><br>
<span class="quotelev2">&gt;&gt; The keys
</span><br>
<span class="quotelev2">&gt;&gt; are readed recursively, and their name built-up based on the
</span><br>
<span class="quotelev2">&gt;&gt; definition
</span><br>
<span class="quotelev2">&gt;&gt; tree.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/mca/base/mca_base_param.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/mca/base/mca_base_param.c	2007-02-16 13:39:40 EST
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 16 Feb 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -38,7 +38,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/mca/base/mca_base_param_internal.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /*
</span><br>
<span class="quotelev2">&gt;&gt;   * Public variables
</span><br>
<span class="quotelev2">&gt;&gt; @@ -61,6 +61,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  /*
</span><br>
<span class="quotelev2">&gt;&gt;   * local functions
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt; +static int read_keys_from_registry(HKEY hKey, char *sub_key, char
</span><br>
<span class="quotelev2">&gt;&gt; *current_key);
</span><br>
<span class="quotelev2">&gt;&gt;  static int read_files(char *file_list);
</span><br>
<span class="quotelev2">&gt;&gt;  static int param_register(const char *type_name,
</span><br>
<span class="quotelev2">&gt;&gt;                            const char *component_name,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -109,8 +110,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;  OBJ_CLASS_INSTANCE(mca_base_param_info_t, opal_list_item_t,
</span><br>
<span class="quotelev2">&gt;&gt;                     info_constructor, info_destructor);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;  /*
</span><br>
<span class="quotelev2">&gt;&gt;   * Set it up
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -118,7 +117,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      int id;
</span><br>
<span class="quotelev2">&gt;&gt;      char *files, *new_files = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      if (!initialized) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* Init the value array for the param storage */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -132,7 +131,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* Set this before we register the parameter, below */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -        initialized = true;
</span><br>
<span class="quotelev2">&gt;&gt; +        initialized = true;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* We may need this later */
</span><br>
<span class="quotelev2">&gt;&gt;  #if !defined(__WINDOWS__)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -141,7 +140,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                   &quot;%s&quot;OPAL_PATH_SEP&quot;.openmpi&quot;OPAL_PATH_SEP&quot;mca-
</span><br>
<span class="quotelev2">&gt;&gt; params.conf:%s&quot;OPAL_PATH_SEP&quot;openmpi-mca-params.conf&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                   home, OPAL_SYSCONFDIR);
</span><br>
<span class="quotelev2">&gt;&gt;  #else
</span><br>
<span class="quotelev2">&gt;&gt; -        home = getenv(&quot;USERPROFILE&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        home = getenv(&quot;USERPROFILE&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          asprintf(&amp;files,
</span><br>
<span class="quotelev2">&gt;&gt;                   &quot;%s&quot;OPAL_PATH_SEP&quot;.openmpi&quot;OPAL_PATH_SEP&quot;mca-
</span><br>
<span class="quotelev2">&gt;&gt; params.conf;%s&quot;OPAL_PATH_SEP&quot;openmpi-mca-params.conf&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                   home, OPAL_SYSCONFDIR);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -154,6 +153,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                              &quot;Path for MCA
</span><br>
<span class="quotelev2">&gt;&gt; configuration files containing default parameter values&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                              false, false, files,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;new_files);
</span><br>
<span class="quotelev2">&gt;&gt;          read_files(new_files);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#if defined(__WINDOWS__)
</span><br>
<span class="quotelev2">&gt;&gt; +        read_keys_from_registry(HKEY_CURRENT_USER, &quot;SOFTWARE\\Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI&quot;, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif  /* defined(__WINDOWS__) */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;          free(files);
</span><br>
<span class="quotelev2">&gt;&gt;          free(new_files);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -801,7 +805,137 @@
</span><br>
<span class="quotelev2">&gt;&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +#if defined(__WINDOWS__)
</span><br>
<span class="quotelev2">&gt;&gt; +#define MAX_KEY_LENGTH 255
</span><br>
<span class="quotelev2">&gt;&gt; +#define MAX_VALUE_NAME 16383
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +static int read_keys_from_registry(HKEY hKey, char *sub_key, char
</span><br>
<span class="quotelev2">&gt;&gt; *current_key)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    TCHAR   achKey[MAX_KEY_LENGTH];        /* buffer for subkey
</span><br>
<span class="quotelev2">&gt;&gt; name */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cbName;                        /* size of name string */
</span><br>
<span class="quotelev2">&gt;&gt; +    TCHAR   achClass[MAX_PATH] = TEXT(&quot;&quot;); /* buffer for class
</span><br>
<span class="quotelev2">&gt;&gt; name */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cchClassName = MAX_PATH;       /* size of class  
</span><br>
<span class="quotelev2">&gt;&gt; string */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cSubKeys=0;                    /* number of subkeys */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cbMaxSubKey;                   /* longest subkey size */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cchMaxClass;                   /* longest class  
</span><br>
<span class="quotelev2">&gt;&gt; string */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cValues;                       /* number of values for
</span><br>
<span class="quotelev2">&gt;&gt; key */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cchMaxValue;                   /* longest value name */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cbMaxValueData;                /* longest value data */
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   cbSecurityDescriptor;          /* size of security
</span><br>
<span class="quotelev2">&gt;&gt; descriptor */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    LPDWORD lpType;
</span><br>
<span class="quotelev2">&gt;&gt; +    LPDWORD word_lpData;
</span><br>
<span class="quotelev2">&gt;&gt; +    TCHAR   str_lpData[MAX_VALUE_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; +    TCHAR   *str_key_name, *tmp_key, *type;
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD   dwSize, i, retCode, type_len;
</span><br>
<span class="quotelev2">&gt;&gt; +    TCHAR achValue[MAX_VALUE_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; +    DWORD cchValue = MAX_VALUE_NAME;
</span><br>
<span class="quotelev2">&gt;&gt; +    HKEY hTestKey;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *sub_sub_key;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if( !RegOpenKeyEx( hKey, sub_key, 0, KEY_READ, &amp;hTestKey) ==
</span><br>
<span class="quotelev2">&gt;&gt; ERROR_SUCCESS )
</span><br>
<span class="quotelev2">&gt;&gt; +        return OPAL_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Get the class name and the value count. */
</span><br>
<span class="quotelev2">&gt;&gt; +    retCode = RegQueryInfoKey( hTestKey,                /* key
</span><br>
<span class="quotelev2">&gt;&gt; handle */
</span><br>
<span class="quotelev2">&gt;&gt; +                               achClass,                /* buffer
</span><br>
<span class="quotelev2">&gt;&gt; for class name */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cchClassName,           /* size of
</span><br>
<span class="quotelev2">&gt;&gt; class string */
</span><br>
<span class="quotelev2">&gt;&gt; +                               NULL,                    /*
</span><br>
<span class="quotelev2">&gt;&gt; reserved */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cSubKeys,               /* number
</span><br>
<span class="quotelev2">&gt;&gt; of subkeys */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cbMaxSubKey,            /* longest
</span><br>
<span class="quotelev2">&gt;&gt; subkey size */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cchMaxClass,            /* longest
</span><br>
<span class="quotelev2">&gt;&gt; class string */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cValues,                /* number
</span><br>
<span class="quotelev2">&gt;&gt; of values for this key */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cchMaxValue,            /* longest
</span><br>
<span class="quotelev2">&gt;&gt; value name */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cbMaxValueData,         /* longest
</span><br>
<span class="quotelev2">&gt;&gt; value data */
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;cbSecurityDescriptor,   /*
</span><br>
<span class="quotelev2">&gt;&gt; security descriptor */
</span><br>
<span class="quotelev2">&gt;&gt; +                               NULL );
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Enumerate the subkeys, until RegEnumKeyEx fails. */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (cSubKeys) {
</span><br>
<span class="quotelev2">&gt;&gt; +        for (i = 0; i &lt; cSubKeys; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +            cbName = MAX_KEY_LENGTH;
</span><br>
<span class="quotelev2">&gt;&gt; +            retCode = RegEnumKeyEx(hTestKey, i, achKey, &amp;cbName,
</span><br>
<span class="quotelev2">&gt;&gt; NULL, NULL, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +            if (retCode == ERROR_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt; +                asprintf(&amp;sub_sub_key, &quot;%s\\%s&quot;, sub_key, achKey);
</span><br>
<span class="quotelev2">&gt;&gt; +                if (current_key!=NULL) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    asprintf(&amp;tmp_key, &quot;%s&quot;, current_key);
</span><br>
<span class="quotelev2">&gt;&gt; +                    asprintf(&amp;current_key, &quot;%s_%s&quot;, current_key,
</span><br>
<span class="quotelev2">&gt;&gt; achKey);
</span><br>
<span class="quotelev2">&gt;&gt; +                } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                    tmp_key = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +                    asprintf(&amp;current_key, &quot;%s&quot;, achKey);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                read_keys_from_registry(HKEY_CURRENT_USER,
</span><br>
<span class="quotelev2">&gt;&gt; sub_sub_key, current_key);
</span><br>
<span class="quotelev2">&gt;&gt; +                free(current_key);
</span><br>
<span class="quotelev2">&gt;&gt; +                if (tmp_key!=NULL) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    asprintf(&amp;current_key, &quot;%s&quot;, tmp_key);
</span><br>
<span class="quotelev2">&gt;&gt; +                    free(tmp_key);
</span><br>
<span class="quotelev2">&gt;&gt; +                } else
</span><br>
<span class="quotelev2">&gt;&gt; +                    current_key = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Enumerate the key values. */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (cValues) {
</span><br>
<span class="quotelev2">&gt;&gt; +        for (i=0, retCode=ERROR_SUCCESS; i&lt;cValues; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +            cchValue = MAX_VALUE_NAME;
</span><br>
<span class="quotelev2">&gt;&gt; +            achValue[0] = '\0';
</span><br>
<span class="quotelev2">&gt;&gt; +            retCode = RegEnumValue(hTestKey, i, achValue,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;cchValue, NULL, NULL, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            if (retCode == ERROR_SUCCESS ) {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                /* lpType - get the type of the value
</span><br>
<span class="quotelev2">&gt;&gt; +                 * dwSize - get the size of the buffer to hold the
</span><br>
<span class="quotelev2">&gt;&gt; value
</span><br>
<span class="quotelev2">&gt;&gt; +                 */
</span><br>
<span class="quotelev2">&gt;&gt; +                retCode = RegQueryValueEx(hTestKey, achValue,
</span><br>
<span class="quotelev2">&gt;&gt; NULL, (LPDWORD)&amp;lpType, NULL, &amp;dwSize);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                if (strcmp(achValue,&quot;&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (current_key!=NULL)
</span><br>
<span class="quotelev2">&gt;&gt; +                        asprintf(&amp;str_key_name, &quot;%s_%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; current_key, achValue);
</span><br>
<span class="quotelev2">&gt;&gt; +                    else
</span><br>
<span class="quotelev2">&gt;&gt; +                        asprintf(&amp;str_key_name, &quot;%s&quot;, achValue);
</span><br>
<span class="quotelev2">&gt;&gt; +                } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (current_key!=NULL)
</span><br>
<span class="quotelev2">&gt;&gt; +                        asprintf(&amp;str_key_name, &quot;%s&quot;, current_key);
</span><br>
<span class="quotelev2">&gt;&gt; +                    else
</span><br>
<span class="quotelev2">&gt;&gt; +                        asprintf(&amp;str_key_name, &quot;%s&quot;, achValue);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                type_len = strcspn(str_key_name, &quot;_&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                type = (char*) malloc((type_len+1)*sizeof(char));
</span><br>
<span class="quotelev2">&gt;&gt; +                strncpy(type, str_key_name, type_len);
</span><br>
<span class="quotelev2">&gt;&gt; +                type[type_len]='\0';
</span><br>
<span class="quotelev2">&gt;&gt; +                if (lpType == (LPDWORD) REG_SZ) { /* REG_SZ = 1 */
</span><br>
<span class="quotelev2">&gt;&gt; +                    retCode = RegQueryValueEx(hTestKey, achValue,
</span><br>
<span class="quotelev2">&gt;&gt; NULL, NULL, (LPBYTE)&amp;str_lpData, &amp;dwSize);
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (!retCode)
</span><br>
<span class="quotelev2">&gt;&gt; +                        mca_base_param_reg_string_name( type,
</span><br>
<span class="quotelev2">&gt;&gt; str_key_name, &quot;Key read from Windows registry&quot;, false, false,
</span><br>
<span class="quotelev2">&gt;&gt; str_lpData, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +                    else
</span><br>
<span class="quotelev2">&gt;&gt; +                        opal_output(0, &quot;error reading value of
</span><br>
<span class="quotelev2">&gt;&gt; param_name: %s with error.\n&quot;, str_key_name, retCode);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                if (lpType == (LPDWORD) REG_DWORD) { /* REG_DWORD
</span><br>
<span class="quotelev2">&gt;&gt; = 4 */
</span><br>
<span class="quotelev2">&gt;&gt; +                    retCode = RegQueryValueEx(hTestKey, achValue,
</span><br>
<span class="quotelev2">&gt;&gt; NULL, NULL, (LPBYTE)&amp;word_lpData, &amp;dwSize);
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (!retCode)
</span><br>
<span class="quotelev2">&gt;&gt; +                        mca_base_param_reg_int_name( type,
</span><br>
<span class="quotelev2">&gt;&gt; str_key_name, &quot;Key read from Windows registry&quot;, false, false, (int)
</span><br>
<span class="quotelev2">&gt;&gt; word_lpData, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +                    else
</span><br>
<span class="quotelev2">&gt;&gt; +                       opal_output(0, &quot;error reading value of
</span><br>
<span class="quotelev2">&gt;&gt; param_name: %s with error.\n&quot;, str_key_name, retCode);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                free(type);
</span><br>
<span class="quotelev2">&gt;&gt; +                free(str_key_name);
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    RegCloseKey( hKey );
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +#endif  /* defined(__WINDOWS__) */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************* 
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; ********/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  static int param_register(const char *type_name,
</span><br>
<span class="quotelev2">&gt;&gt;                            const char *component_name,
</span><br>
<span class="quotelev2">&gt;&gt;                            const char *param_name,
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1313.php">Karl Dockendorf: "[OMPI devel] mpicc Xcode 2.3 integration"</a>
<li><strong>Previous message:</strong> <a href="1311.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<li><strong>In reply to:</strong> <a href="1311.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
