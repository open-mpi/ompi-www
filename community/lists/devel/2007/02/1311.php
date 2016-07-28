<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 16 16:39:03 2007" -->
<!-- isoreceived="20070216213903" -->
<!-- sent="Fri, 16 Feb 2007 16:38:58 -0500" -->
<!-- isosent="20070216213858" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688" -->
<!-- id="C1B14E3A-8995-428C-92D6-D9C0064D0E06_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200702161839.l1GIdeGs002738_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-16 16:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<li><strong>Previous message:</strong> <a href="1310.php">Tim Mattox: "[OMPI devel] Open MPI v1.2b4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<li><strong>Reply:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I don't think 'HKEY' is defined on all platforms (at least I'm  
<br>
getting compile errors from it on a Sun box). should the function  
<br>
definition:
<br>
<span class="quotelev1">&gt; +static int read_keys_from_registry(HKEY hKey, char *sub_key, char  
</span><br>
<span class="quotelev1">&gt; *current_key);
</span><br>
be changed some how?
<br>
<p>-- Josh
<br>
<p>On Feb 16, 2007, at 1:39 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-02-16 13:39:40 EST (Fri, 16 Feb 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 13688
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; On Windows allow the MCA params to come from the Windows Registry.  
</span><br>
<span class="quotelev1">&gt; The keys
</span><br>
<span class="quotelev1">&gt; are readed recursively, and their name built-up based on the  
</span><br>
<span class="quotelev1">&gt; definition
</span><br>
<span class="quotelev1">&gt; tree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_param.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_param.c	2007-02-16 13:39:40 EST  
</span><br>
<span class="quotelev1">&gt; (Fri, 16 Feb 2007)
</span><br>
<span class="quotelev1">&gt; @@ -38,7 +38,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/base/mca_base_param_internal.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Public variables
</span><br>
<span class="quotelev1">&gt; @@ -61,6 +61,7 @@
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * local functions
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; +static int read_keys_from_registry(HKEY hKey, char *sub_key, char  
</span><br>
<span class="quotelev1">&gt; *current_key);
</span><br>
<span class="quotelev1">&gt;  static int read_files(char *file_list);
</span><br>
<span class="quotelev1">&gt;  static int param_register(const char *type_name,
</span><br>
<span class="quotelev1">&gt;                            const char *component_name,
</span><br>
<span class="quotelev1">&gt; @@ -109,8 +110,6 @@
</span><br>
<span class="quotelev1">&gt;  OBJ_CLASS_INSTANCE(mca_base_param_info_t, opal_list_item_t,
</span><br>
<span class="quotelev1">&gt;                     info_constructor, info_destructor);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Set it up
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; @@ -118,7 +117,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int id;
</span><br>
<span class="quotelev1">&gt;      char *files, *new_files = NULL;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      if (!initialized) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* Init the value array for the param storage */
</span><br>
<span class="quotelev1">&gt; @@ -132,7 +131,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* Set this before we register the parameter, below */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        initialized = true;
</span><br>
<span class="quotelev1">&gt; +        initialized = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* We may need this later */
</span><br>
<span class="quotelev1">&gt;  #if !defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; @@ -141,7 +140,7 @@
</span><br>
<span class="quotelev1">&gt;                   &quot;%s&quot;OPAL_PATH_SEP&quot;.openmpi&quot;OPAL_PATH_SEP&quot;mca- 
</span><br>
<span class="quotelev1">&gt; params.conf:%s&quot;OPAL_PATH_SEP&quot;openmpi-mca-params.conf&quot;,
</span><br>
<span class="quotelev1">&gt;                   home, OPAL_SYSCONFDIR);
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt; -        home = getenv(&quot;USERPROFILE&quot;);
</span><br>
<span class="quotelev1">&gt; +        home = getenv(&quot;USERPROFILE&quot;);
</span><br>
<span class="quotelev1">&gt;          asprintf(&amp;files,
</span><br>
<span class="quotelev1">&gt;                   &quot;%s&quot;OPAL_PATH_SEP&quot;.openmpi&quot;OPAL_PATH_SEP&quot;mca- 
</span><br>
<span class="quotelev1">&gt; params.conf;%s&quot;OPAL_PATH_SEP&quot;openmpi-mca-params.conf&quot;,
</span><br>
<span class="quotelev1">&gt;                   home, OPAL_SYSCONFDIR);
</span><br>
<span class="quotelev1">&gt; @@ -154,6 +153,11 @@
</span><br>
<span class="quotelev1">&gt;                                              &quot;Path for MCA  
</span><br>
<span class="quotelev1">&gt; configuration files containing default parameter values&quot;,
</span><br>
<span class="quotelev1">&gt;                                              false, false, files,  
</span><br>
<span class="quotelev1">&gt; &amp;new_files);
</span><br>
<span class="quotelev1">&gt;          read_files(new_files);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; +        read_keys_from_registry(HKEY_CURRENT_USER, &quot;SOFTWARE\\Open  
</span><br>
<span class="quotelev1">&gt; MPI&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +#endif  /* defined(__WINDOWS__) */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          free(files);
</span><br>
<span class="quotelev1">&gt;          free(new_files);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -801,7 +805,137 @@
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +#if defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; +#define MAX_KEY_LENGTH 255
</span><br>
<span class="quotelev1">&gt; +#define MAX_VALUE_NAME 16383
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int read_keys_from_registry(HKEY hKey, char *sub_key, char  
</span><br>
<span class="quotelev1">&gt; *current_key)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    TCHAR   achKey[MAX_KEY_LENGTH];        /* buffer for subkey  
</span><br>
<span class="quotelev1">&gt; name */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cbName;                        /* size of name string */
</span><br>
<span class="quotelev1">&gt; +    TCHAR   achClass[MAX_PATH] = TEXT(&quot;&quot;); /* buffer for class  
</span><br>
<span class="quotelev1">&gt; name */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cchClassName = MAX_PATH;       /* size of class string */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cSubKeys=0;                    /* number of subkeys */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cbMaxSubKey;                   /* longest subkey size */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cchMaxClass;                   /* longest class string */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cValues;                       /* number of values for  
</span><br>
<span class="quotelev1">&gt; key */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cchMaxValue;                   /* longest value name */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cbMaxValueData;                /* longest value data */
</span><br>
<span class="quotelev1">&gt; +    DWORD   cbSecurityDescriptor;          /* size of security  
</span><br>
<span class="quotelev1">&gt; descriptor */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    LPDWORD lpType;
</span><br>
<span class="quotelev1">&gt; +    LPDWORD word_lpData;
</span><br>
<span class="quotelev1">&gt; +    TCHAR   str_lpData[MAX_VALUE_NAME];
</span><br>
<span class="quotelev1">&gt; +    TCHAR   *str_key_name, *tmp_key, *type;
</span><br>
<span class="quotelev1">&gt; +    DWORD   dwSize, i, retCode, type_len;
</span><br>
<span class="quotelev1">&gt; +    TCHAR achValue[MAX_VALUE_NAME];
</span><br>
<span class="quotelev1">&gt; +    DWORD cchValue = MAX_VALUE_NAME;
</span><br>
<span class="quotelev1">&gt; +    HKEY hTestKey;
</span><br>
<span class="quotelev1">&gt; +    char *sub_sub_key;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( !RegOpenKeyEx( hKey, sub_key, 0, KEY_READ, &amp;hTestKey) ==  
</span><br>
<span class="quotelev1">&gt; ERROR_SUCCESS )
</span><br>
<span class="quotelev1">&gt; +        return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Get the class name and the value count. */
</span><br>
<span class="quotelev1">&gt; +    retCode = RegQueryInfoKey( hTestKey,                /* key  
</span><br>
<span class="quotelev1">&gt; handle */
</span><br>
<span class="quotelev1">&gt; +                               achClass,                /* buffer  
</span><br>
<span class="quotelev1">&gt; for class name */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cchClassName,           /* size of  
</span><br>
<span class="quotelev1">&gt; class string */
</span><br>
<span class="quotelev1">&gt; +                               NULL,                    /*  
</span><br>
<span class="quotelev1">&gt; reserved */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cSubKeys,               /* number  
</span><br>
<span class="quotelev1">&gt; of subkeys */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cbMaxSubKey,            /* longest  
</span><br>
<span class="quotelev1">&gt; subkey size */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cchMaxClass,            /* longest  
</span><br>
<span class="quotelev1">&gt; class string */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cValues,                /* number  
</span><br>
<span class="quotelev1">&gt; of values for this key */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cchMaxValue,            /* longest  
</span><br>
<span class="quotelev1">&gt; value name */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cbMaxValueData,         /* longest  
</span><br>
<span class="quotelev1">&gt; value data */
</span><br>
<span class="quotelev1">&gt; +                               &amp;cbSecurityDescriptor,   /*  
</span><br>
<span class="quotelev1">&gt; security descriptor */
</span><br>
<span class="quotelev1">&gt; +                               NULL );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Enumerate the subkeys, until RegEnumKeyEx fails. */
</span><br>
<span class="quotelev1">&gt; +    if (cSubKeys) {
</span><br>
<span class="quotelev1">&gt; +        for (i = 0; i &lt; cSubKeys; i++) {
</span><br>
<span class="quotelev1">&gt; +            cbName = MAX_KEY_LENGTH;
</span><br>
<span class="quotelev1">&gt; +            retCode = RegEnumKeyEx(hTestKey, i, achKey, &amp;cbName,  
</span><br>
<span class="quotelev1">&gt; NULL, NULL, NULL, NULL);
</span><br>
<span class="quotelev1">&gt; +            if (retCode == ERROR_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; +                asprintf(&amp;sub_sub_key, &quot;%s\\%s&quot;, sub_key, achKey);
</span><br>
<span class="quotelev1">&gt; +                if (current_key!=NULL) {
</span><br>
<span class="quotelev1">&gt; +                    asprintf(&amp;tmp_key, &quot;%s&quot;, current_key);
</span><br>
<span class="quotelev1">&gt; +                    asprintf(&amp;current_key, &quot;%s_%s&quot;, current_key,  
</span><br>
<span class="quotelev1">&gt; achKey);
</span><br>
<span class="quotelev1">&gt; +                } else {
</span><br>
<span class="quotelev1">&gt; +                    tmp_key = NULL;
</span><br>
<span class="quotelev1">&gt; +                    asprintf(&amp;current_key, &quot;%s&quot;, achKey);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                read_keys_from_registry(HKEY_CURRENT_USER,  
</span><br>
<span class="quotelev1">&gt; sub_sub_key, current_key);
</span><br>
<span class="quotelev1">&gt; +                free(current_key);
</span><br>
<span class="quotelev1">&gt; +                if (tmp_key!=NULL) {
</span><br>
<span class="quotelev1">&gt; +                    asprintf(&amp;current_key, &quot;%s&quot;, tmp_key);
</span><br>
<span class="quotelev1">&gt; +                    free(tmp_key);
</span><br>
<span class="quotelev1">&gt; +                } else
</span><br>
<span class="quotelev1">&gt; +                    current_key = NULL;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Enumerate the key values. */
</span><br>
<span class="quotelev1">&gt; +    if (cValues) {
</span><br>
<span class="quotelev1">&gt; +        for (i=0, retCode=ERROR_SUCCESS; i&lt;cValues; i++) {
</span><br>
<span class="quotelev1">&gt; +            cchValue = MAX_VALUE_NAME;
</span><br>
<span class="quotelev1">&gt; +            achValue[0] = '\0';
</span><br>
<span class="quotelev1">&gt; +            retCode = RegEnumValue(hTestKey, i, achValue,  
</span><br>
<span class="quotelev1">&gt; &amp;cchValue, NULL, NULL, NULL, NULL);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if (retCode == ERROR_SUCCESS ) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                /* lpType - get the type of the value
</span><br>
<span class="quotelev1">&gt; +                 * dwSize - get the size of the buffer to hold the  
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev1">&gt; +                 */
</span><br>
<span class="quotelev1">&gt; +                retCode = RegQueryValueEx(hTestKey, achValue,  
</span><br>
<span class="quotelev1">&gt; NULL, (LPDWORD)&amp;lpType, NULL, &amp;dwSize);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                if (strcmp(achValue,&quot;&quot;)) {
</span><br>
<span class="quotelev1">&gt; +                    if (current_key!=NULL)
</span><br>
<span class="quotelev1">&gt; +                        asprintf(&amp;str_key_name, &quot;%s_%s&quot;,  
</span><br>
<span class="quotelev1">&gt; current_key, achValue);
</span><br>
<span class="quotelev1">&gt; +                    else
</span><br>
<span class="quotelev1">&gt; +                        asprintf(&amp;str_key_name, &quot;%s&quot;, achValue);
</span><br>
<span class="quotelev1">&gt; +                } else {
</span><br>
<span class="quotelev1">&gt; +                    if (current_key!=NULL)
</span><br>
<span class="quotelev1">&gt; +                        asprintf(&amp;str_key_name, &quot;%s&quot;, current_key);
</span><br>
<span class="quotelev1">&gt; +                    else
</span><br>
<span class="quotelev1">&gt; +                        asprintf(&amp;str_key_name, &quot;%s&quot;, achValue);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                type_len = strcspn(str_key_name, &quot;_&quot;);
</span><br>
<span class="quotelev1">&gt; +                type = (char*) malloc((type_len+1)*sizeof(char));
</span><br>
<span class="quotelev1">&gt; +                strncpy(type, str_key_name, type_len);
</span><br>
<span class="quotelev1">&gt; +                type[type_len]='\0';
</span><br>
<span class="quotelev1">&gt; +                if (lpType == (LPDWORD) REG_SZ) { /* REG_SZ = 1 */
</span><br>
<span class="quotelev1">&gt; +                    retCode = RegQueryValueEx(hTestKey, achValue,  
</span><br>
<span class="quotelev1">&gt; NULL, NULL, (LPBYTE)&amp;str_lpData, &amp;dwSize);
</span><br>
<span class="quotelev1">&gt; +                    if (!retCode)
</span><br>
<span class="quotelev1">&gt; +                        mca_base_param_reg_string_name( type,  
</span><br>
<span class="quotelev1">&gt; str_key_name, &quot;Key read from Windows registry&quot;, false, false,  
</span><br>
<span class="quotelev1">&gt; str_lpData, NULL);
</span><br>
<span class="quotelev1">&gt; +                    else
</span><br>
<span class="quotelev1">&gt; +                        opal_output(0, &quot;error reading value of  
</span><br>
<span class="quotelev1">&gt; param_name: %s with error.\n&quot;, str_key_name, retCode);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                if (lpType == (LPDWORD) REG_DWORD) { /* REG_DWORD  
</span><br>
<span class="quotelev1">&gt; = 4 */
</span><br>
<span class="quotelev1">&gt; +                    retCode = RegQueryValueEx(hTestKey, achValue,  
</span><br>
<span class="quotelev1">&gt; NULL, NULL, (LPBYTE)&amp;word_lpData, &amp;dwSize);
</span><br>
<span class="quotelev1">&gt; +                    if (!retCode)
</span><br>
<span class="quotelev1">&gt; +                        mca_base_param_reg_int_name( type,  
</span><br>
<span class="quotelev1">&gt; str_key_name, &quot;Key read from Windows registry&quot;, false, false, (int) 
</span><br>
<span class="quotelev1">&gt; word_lpData, NULL);
</span><br>
<span class="quotelev1">&gt; +                    else
</span><br>
<span class="quotelev1">&gt; +                       opal_output(0, &quot;error reading value of  
</span><br>
<span class="quotelev1">&gt; param_name: %s with error.\n&quot;, str_key_name, retCode);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                free(type);
</span><br>
<span class="quotelev1">&gt; +                free(str_key_name);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    RegCloseKey( hKey );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +#endif  /* defined(__WINDOWS__) */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/ 
</span><br>
<span class="quotelev1">&gt; ********************************************************************** 
</span><br>
<span class="quotelev1">&gt; ********/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  static int param_register(const char *type_name,
</span><br>
<span class="quotelev1">&gt;                            const char *component_name,
</span><br>
<span class="quotelev1">&gt;                            const char *param_name,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<li><strong>Previous message:</strong> <a href="1310.php">Tim Mattox: "[OMPI devel] Open MPI v1.2b4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<li><strong>Reply:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
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
