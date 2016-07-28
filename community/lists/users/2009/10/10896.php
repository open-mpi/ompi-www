<?
$subject_val = "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 02:17:49 2009" -->
<!-- isoreceived="20091008061749" -->
<!-- sent="Thu, 8 Oct 2009 15:17:40 +0900" -->
<!-- isosent="20091008061740" -->
<!-- name="Hakime Seddik" -->
<!-- email="hakime_at_[hidden]" -->
<!-- subject="[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard" -->
<!-- id="FCE7A33B-B207-43A5-9C86-CF79F3CC491C_at_pop.lowtem.hokudai.ac.jp" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard<br>
<strong>From:</strong> Hakime Seddik (<em>hakime_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 02:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10897.php">Kilou Zelabia: "[OMPI users] Re :  Re : Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am having problems to compile the latest release of OpenMPI on Snow  
<br>
Leopard (Mac OS 10.6). I have installed the latest gfortran compiler  
<br>
(which can be found here: <a href="http://hpc.sourceforge.net/">http://hpc.sourceforge.net/</a>) and when trying  
<br>
to compile OpenMPI 1.3.3, i get some linking issues:
<br>
<p>Making all in tools/wrappers
<br>
depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/ 
<br>
include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/ 
<br>
plpa/src/libplpa   -I../../..  -D_REENTRANT  -DNDEBUG -O5 -ftree- 
<br>
vectorize -finline-functions -fno-strict-aliasing  -fvisibility=hidden  
<br>
-MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o opal_wrapper.o  
<br>
opal_wrapper.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Po
<br>
cc1: note: -ftree-vectorize enables strict aliasing.  -fno-strict- 
<br>
aliasing is ignored when Auto Vectorization is used.
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link gcc  -DNDEBUG -O5 - 
<br>
ftree-vectorize -finline-functions -fno-strict-aliasing  - 
<br>
fvisibility=hidden  -export-dynamic   -o opal_wrapper  
<br>
opal_wrapper.o ../../../opal/libopen-pal.la -lutil
<br>
libtool: link: gcc -DNDEBUG -O5 -ftree-vectorize -finline-functions - 
<br>
fno-strict-aliasing -fvisibility=hidden -o .libs/opal_wrapper  
<br>
opal_wrapper.o  ../../../opal/.libs/libopen-pal.dylib -lutil
<br>
Undefined symbols:
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_few&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_os_path&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_add_extra_includes in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_insert&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_options_data_expand in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_count&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_add_extra_includes in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_options_data_expand in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_find_options_index in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_basename&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_install_dirs_expand&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_append_nosize&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_add_extra_includes in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_split&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_add_extra_includes in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_options_data_expand in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_load_env_data_argv in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_delete&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_free&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_options_data_expand in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_load_env_data_argv in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_data_callback in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_copy&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_finalize_util&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_show_help&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_util_keyval_parse&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_install_dirs&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_init_util&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_path_findv&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_strerror&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_argv_join&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in opal_wrapper.o
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>The same problem appears when trying to compile OpenMPI 1.3.2.
<br>
<p>Did someone have the same problem? Is there a fix for that?
<br>
<p>Thanks in advance for the help,
<br>
<p>Regards,
<br>
<p>Hakime Seddik
<br>
Glacier and Ice Sheet Research Group
<br>
Tel:+81-(0)90-6263-4074
<br>
email: hakime_at_[hidden]
<br>
<p>Institute of Low Temperature Science
<br>
Hokkaido University, Kita-19, Nishi-8, Kita-ku
<br>
Sapporo 060-0819. Japan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10897.php">Kilou Zelabia: "[OMPI users] Re :  Re : Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
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
