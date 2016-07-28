<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 15:35:06 2016" -->
<!-- isoreceived="20160423193506" -->
<!-- sent="Sat, 23 Apr 2016 21:34:38 +0200" -->
<!-- isosent="20160423193438" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="f3897b55-5a21-97b3-fe34-9852e16b9f12_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5s=Y5jnwcXhbtT1COmHddHi__-g1Zvug+SB96Urt6jhZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-23 15:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29010.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29008.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="28999.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29033.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29033.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>I don't know what happened, but the files are not available now
<br>
and they were definitely available when I answered the email from
<br>
Ralph. The files also have a different timestamp now. This is an
<br>
extract from my email to Ralph for Solaris Sparc.
<br>
<p>-rwxr-xr-x 1 root root     977 Apr 19 19:49 mca_plm_rsh.la
<br>
-rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
<br>
-rwxr-xr-x 1 root root    1007 Apr 19 19:47 mca_pmix_pmix112.la
<br>
-rwxr-xr-x 1 root root 1400512 Apr 19 19:47 mca_pmix_pmix112.so
<br>
-rwxr-xr-x 1 root root     971 Apr 19 19:52 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
<br>
<p>Now I have the following output for these files.
<br>
<p>-rwxr-xr-x 1 root root     976 Apr 19 19:58 mca_plm_rsh.la
<br>
-rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
<br>
-rwxr-xr-x 1 root root     970 Apr 19 20:00 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
<br>
<p>I'll try to find out what happened next week when I'm back in
<br>
my office.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><p>Am 23.04.16 um 02:12 schrieb Gilles Gouaillardet:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to reproduce this on my solaris11 x86_64 vm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the mean time, can you please double check mca_pmix_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt; is a 64 bits library ?
</span><br>
<span class="quotelev1">&gt; (E.g, confirm &quot;-m64&quot; was correctly passed to pmix)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, April 22, 2016, Siegmar Gross
</span><br>
<span class="quotelev1">&gt; &lt;siegmar.gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:siegmar.gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I've already used &quot;-enable-debug&quot;. &quot;SYSTEM_ENV&quot; is &quot;SunOS&quot; or
</span><br>
<span class="quotelev1">&gt;     &quot;Linux&quot; and &quot;MACHINE_ENV&quot; is &quot;sparc&quot; or &quot;x86_84&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mkdir openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt;     cd openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev1">&gt;       --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;       --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;       --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;       --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;       JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;       LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;       CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;       CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;       --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;       --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;       --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;       --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;       --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;       --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;       --without-verbs \
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;       --enable-debug \
</span><br>
<span class="quotelev1">&gt;       |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mkdir openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt;     cd openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev1">&gt;       --prefix=/usr/local/openmpi-2.0.0_64_cc \
</span><br>
<span class="quotelev1">&gt;       --libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;       --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;       --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;       JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;       LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;       CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;       CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;       --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;       --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;       --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;       --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;       --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;       --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;       --without-verbs \
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-cflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-ldflags=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;       --enable-debug \
</span><br>
<span class="quotelev1">&gt;       |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Am 21.04.2016 um 18:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Can you please rebuild OMPI with -enable-debug in the configure
</span><br>
<span class="quotelev1">&gt;         cmd? It will let us see more error output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Apr 21, 2016, at 8:52 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;             &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I don't see any additional information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             tyr hello_1 108 mpiexec -np 4 --host
</span><br>
<span class="quotelev1">&gt;             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev1">&gt;             mca_base_component_show_load_errors 1 hello_1_mpi
</span><br>
<span class="quotelev1">&gt;             [tyr.informatik.hs-fulda.de:06211
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06211">http://tyr.informatik.hs-fulda.de:06211</a>&gt;] [[48741,0],0]
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;             ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt;             at line 638
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev1">&gt;             parallel process is
</span><br>
<span class="quotelev1">&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;             process can
</span><br>
<span class="quotelev1">&gt;             fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;             environment problems.  This failure appears to be an
</span><br>
<span class="quotelev1">&gt;             internal failure;
</span><br>
<span class="quotelev1">&gt;             here's some additional information (which may only be
</span><br>
<span class="quotelev1">&gt;             relevant to an
</span><br>
<span class="quotelev1">&gt;             Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;              --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             tyr hello_1 109 mpiexec -np 4 --host
</span><br>
<span class="quotelev1">&gt;             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev1">&gt;             mca_base_component_show_load_errors 1 -mca pmix_base_verbose
</span><br>
<span class="quotelev1">&gt;             10 -mca pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev1">&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca: base:
</span><br>
<span class="quotelev1">&gt;             components_register: registering framework pmix components
</span><br>
<span class="quotelev1">&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca: base:
</span><br>
<span class="quotelev1">&gt;             components_open: opening pmix components
</span><br>
<span class="quotelev1">&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca:base:select:
</span><br>
<span class="quotelev1">&gt;             Auto-selecting pmix components
</span><br>
<span class="quotelev1">&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca:base:select:(
</span><br>
<span class="quotelev1">&gt;             pmix) No component selected!
</span><br>
<span class="quotelev1">&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] [[48738,0],0]
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;             ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt;             at line 638
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev1">&gt;             parallel process is
</span><br>
<span class="quotelev1">&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;             process can
</span><br>
<span class="quotelev1">&gt;             fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;             environment problems.  This failure appears to be an
</span><br>
<span class="quotelev1">&gt;             internal failure;
</span><br>
<span class="quotelev1">&gt;             here's some additional information (which may only be
</span><br>
<span class="quotelev1">&gt;             relevant to an
</span><br>
<span class="quotelev1">&gt;             Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;              --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             tyr hello_1 110
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Am 21.04.2016 um 17:24 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Hmmm&#133;it looks like you built the right components, but
</span><br>
<span class="quotelev1">&gt;                 they are not being picked up. Can you run your mpiexec
</span><br>
<span class="quotelev1">&gt;                 command again, adding &#147;-mca
</span><br>
<span class="quotelev1">&gt;                 mca_base_component_show_load_errors 1&#148; to the cmd line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     On Apr 21, 2016, at 8:16 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;                     &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     I have attached ompi_info output for both compilers
</span><br>
<span class="quotelev1">&gt;                     from my
</span><br>
<span class="quotelev1">&gt;                     sparc machine and the listings for both compilers
</span><br>
<span class="quotelev1">&gt;                     from the
</span><br>
<span class="quotelev1">&gt;                     &lt;prefix&gt;/lib/openmpi directories. Hopefully that
</span><br>
<span class="quotelev1">&gt;                     helps to
</span><br>
<span class="quotelev1">&gt;                     find the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     hermes tmp 3 tar zvft openmpi-2.x_info.tar.gz
</span><br>
<span class="quotelev1">&gt;                     -rw-r--r-- root/root     10969 2016-04-21 17:06
</span><br>
<span class="quotelev1">&gt;                     ompi_info_SunOS_sparc_cc.txt
</span><br>
<span class="quotelev1">&gt;                     -rw-r--r-- root/root     11044 2016-04-21 17:06
</span><br>
<span class="quotelev1">&gt;                     ompi_info_SunOS_sparc_gcc.txt
</span><br>
<span class="quotelev1">&gt;                     -rw-r--r-- root/root     71252 2016-04-21 17:02
</span><br>
<span class="quotelev1">&gt;                     lib64_openmpi.txt
</span><br>
<span class="quotelev1">&gt;                     hermes tmp 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Kind regards and thank you very much once more for
</span><br>
<span class="quotelev1">&gt;                     your help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Am 21.04.2016 um 15:54 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Odd - it would appear that none of the pmix
</span><br>
<span class="quotelev1">&gt;                         components built? Can you send
</span><br>
<span class="quotelev1">&gt;                         along the output from ompi_info? Or just send a
</span><br>
<span class="quotelev1">&gt;                         listing of the files in the
</span><br>
<span class="quotelev1">&gt;                         &lt;prefix&gt;/lib/openmpi directory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             On Apr 21, 2016, at 1:27 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;                             &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                             &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                             wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Am 21.04.2016 um 00:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 Could you please rerun these test and
</span><br>
<span class="quotelev1">&gt;                                 add &#147;-mca pmix_base_verbose 10
</span><br>
<span class="quotelev1">&gt;                                 -mca pmix_server_verbose 5&#148; to your cmd
</span><br>
<span class="quotelev1">&gt;                                 line? I need to see why the
</span><br>
<span class="quotelev1">&gt;                                 pmix components failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             tyr spawn 111 mpiexec -np 1 --host
</span><br>
<span class="quotelev1">&gt;                             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev1">&gt;                             pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev1">&gt;                             pmix_server_verbose 5 spawn_multiple_master
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev1">&gt;                             base: components_register: registering
</span><br>
<span class="quotelev1">&gt;                             framework pmix components
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev1">&gt;                             base: components_open: opening pmix components
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev1">&gt;                             mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev1">&gt;                             mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev1">&gt;                             [[52794,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;                             ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt;                             at line 638
</span><br>
<span class="quotelev1">&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                             It looks like orte_init failed for some
</span><br>
<span class="quotelev1">&gt;                             reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;                             likely to abort.  There are many reasons
</span><br>
<span class="quotelev1">&gt;                             that a parallel process can
</span><br>
<span class="quotelev1">&gt;                             fail during orte_init; some of which are due
</span><br>
<span class="quotelev1">&gt;                             to configuration or
</span><br>
<span class="quotelev1">&gt;                             environment problems.  This failure appears
</span><br>
<span class="quotelev1">&gt;                             to be an internal failure;
</span><br>
<span class="quotelev1">&gt;                             here's some additional information (which
</span><br>
<span class="quotelev1">&gt;                             may only be relevant to an
</span><br>
<span class="quotelev1">&gt;                             Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;                             --&gt; Returned value Not found (-13) instead
</span><br>
<span class="quotelev1">&gt;                             of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                             tyr spawn 112
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             tyr hello_1 116 mpiexec -np 1 --host
</span><br>
<span class="quotelev1">&gt;                             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev1">&gt;                             pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev1">&gt;                             pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev1">&gt;                             base: components_register: registering
</span><br>
<span class="quotelev1">&gt;                             framework pmix components
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev1">&gt;                             base: components_open: opening pmix components
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev1">&gt;                             mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev1">&gt;                             mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev1">&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev1">&gt;                             [[52315,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;                             ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt;                             at line 638
</span><br>
<span class="quotelev1">&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                             It looks like orte_init failed for some
</span><br>
<span class="quotelev1">&gt;                             reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;                             likely to abort.  There are many reasons
</span><br>
<span class="quotelev1">&gt;                             that a parallel process can
</span><br>
<span class="quotelev1">&gt;                             fail during orte_init; some of which are due
</span><br>
<span class="quotelev1">&gt;                             to configuration or
</span><br>
<span class="quotelev1">&gt;                             environment problems.  This failure appears
</span><br>
<span class="quotelev1">&gt;                             to be an internal failure;
</span><br>
<span class="quotelev1">&gt;                             here's some additional information (which
</span><br>
<span class="quotelev1">&gt;                             may only be relevant to an
</span><br>
<span class="quotelev1">&gt;                             Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;                             --&gt; Returned value Not found (-13) instead
</span><br>
<span class="quotelev1">&gt;                             of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                             tyr hello_1 117
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Thank you very much for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 Thanks
</span><br>
<span class="quotelev1">&gt;                                 Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     On Apr 20, 2016, at 10:12 AM,
</span><br>
<span class="quotelev1">&gt;                                     Siegmar Gross
</span><br>
<span class="quotelev1">&gt;                                     &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                     &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                                     wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     I have built
</span><br>
<span class="quotelev1">&gt;                                     openmpi-v2.x-dev-1280-gc110ae8 on my
</span><br>
<span class="quotelev1">&gt;                                     machines
</span><br>
<span class="quotelev1">&gt;                                     (Solaris 10 Sparc, Solaris 10
</span><br>
<span class="quotelev1">&gt;                                     x86_64, and openSUSE Linux
</span><br>
<span class="quotelev1">&gt;                                     12.1 x86_64) with gcc-5.1.0 and Sun
</span><br>
<span class="quotelev1">&gt;                                     C 5.13. Unfortunately I get
</span><br>
<span class="quotelev1">&gt;                                     runtime errors for some programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Sun C 5.13:
</span><br>
<span class="quotelev1">&gt;                                     ===========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     For all my test programs I get the
</span><br>
<span class="quotelev1">&gt;                                     same error on Solaris Sparc and
</span><br>
<span class="quotelev1">&gt;                                     Solaris x86_64, while the programs
</span><br>
<span class="quotelev1">&gt;                                     work fine on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     tyr hello_1 115 mpiexec -np 2
</span><br>
<span class="quotelev1">&gt;                                     hello_1_mpi
</span><br>
<span class="quotelev1">&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:22373]
</span><br>
<span class="quotelev1">&gt;                                     [[61763,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;                                     found in file
</span><br>
<span class="quotelev1">&gt;                                     ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt;                                     at line 638
</span><br>
<span class="quotelev1">&gt;                                     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                                     It looks like orte_init failed for
</span><br>
<span class="quotelev1">&gt;                                     some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;                                     likely to abort.  There are many
</span><br>
<span class="quotelev1">&gt;                                     reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;                                     fail during orte_init; some of which
</span><br>
<span class="quotelev1">&gt;                                     are due to configuration or
</span><br>
<span class="quotelev1">&gt;                                     environment problems.  This failure
</span><br>
<span class="quotelev1">&gt;                                     appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;                                     here's some additional information
</span><br>
<span class="quotelev1">&gt;                                     (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;                                     Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;                                     --&gt; Returned value Not found (-13)
</span><br>
<span class="quotelev1">&gt;                                     instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;                                     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                                     tyr hello_1 116
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     GCC-5.1.0:
</span><br>
<span class="quotelev1">&gt;                                     ==========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     tyr spawn 121 mpiexec -np 1 --host
</span><br>
<span class="quotelev1">&gt;                                     tyr,sunpc1,linpc1,ruester
</span><br>
<span class="quotelev1">&gt;                                     spawn_multiple_master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Parent process 0 running on
</span><br>
<span class="quotelev1">&gt;                                     tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                                     I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev1">&gt;                                     PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev1">&gt;                                     ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev1">&gt;                                     at line 829
</span><br>
<span class="quotelev1">&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev1">&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev1">&gt;                                     PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev1">&gt;                                     ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev1">&gt;                                     at line 2176
</span><br>
<span class="quotelev1">&gt;                                     [tyr:25377] *** An error occurred in
</span><br>
<span class="quotelev1">&gt;                                     MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt;                                     [tyr:25377] *** reported by process
</span><br>
<span class="quotelev1">&gt;                                     [3308257281,0]
</span><br>
<span class="quotelev1">&gt;                                     [tyr:25377] *** on communicator
</span><br>
<span class="quotelev1">&gt;                                     MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;                                     [tyr:25377] *** MPI_ERR_SPAWN: could
</span><br>
<span class="quotelev1">&gt;                                     not spawn processes
</span><br>
<span class="quotelev1">&gt;                                     [tyr:25377] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev1">&gt;                                     (processes in this communicator will
</span><br>
<span class="quotelev1">&gt;                                     now abort,
</span><br>
<span class="quotelev1">&gt;                                     [tyr:25377] ***    and potentially
</span><br>
<span class="quotelev1">&gt;                                     your MPI job)
</span><br>
<span class="quotelev1">&gt;                                     tyr spawn 122
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     I would be grateful if somebody can
</span><br>
<span class="quotelev1">&gt;                                     fix the problems. Thank you very
</span><br>
<span class="quotelev1">&gt;                                     much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Siegmar
</span><br>
<span class="quotelev1">&gt;                                     &lt;hello_1_mpi.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;                                     users mailing list
</span><br>
<span class="quotelev1">&gt;                                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                                     Subscription:
</span><br>
<span class="quotelev1">&gt;                                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                                     Link to this post:
</span><br>
<span class="quotelev1">&gt;                                     <a href="http://www.open-mpi.org/community/lists/users/2016/04/28983.php">http://www.open-mpi.org/community/lists/users/2016/04/28983.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                                 users mailing list
</span><br>
<span class="quotelev1">&gt;                                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                                 Subscription:
</span><br>
<span class="quotelev1">&gt;                                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                                 Link to this
</span><br>
<span class="quotelev1">&gt;                                 post:
</span><br>
<span class="quotelev1">&gt;                                 <a href="http://www.open-mpi.org/community/lists/users/2016/04/28986.php">http://www.open-mpi.org/community/lists/users/2016/04/28986.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             _______________________________________________
</span><br>
<span class="quotelev1">&gt;                             users mailing list
</span><br>
<span class="quotelev1">&gt;                             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                             Subscription:
</span><br>
<span class="quotelev1">&gt;                             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                             Link to this
</span><br>
<span class="quotelev1">&gt;                             post:
</span><br>
<span class="quotelev1">&gt;                             <a href="http://www.open-mpi.org/community/lists/users/2016/04/28987.php">http://www.open-mpi.org/community/lists/users/2016/04/28987.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;                         users mailing list
</span><br>
<span class="quotelev1">&gt;                         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                         Subscription:
</span><br>
<span class="quotelev1">&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                         Link to this post:
</span><br>
<span class="quotelev1">&gt;                         <a href="http://www.open-mpi.org/community/lists/users/2016/04/28988.php">http://www.open-mpi.org/community/lists/users/2016/04/28988.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     &lt;openmpi-2.x_info.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;                     users mailing list
</span><br>
<span class="quotelev1">&gt;                     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                     Subscription:
</span><br>
<span class="quotelev1">&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                     Link to this post:
</span><br>
<span class="quotelev1">&gt;                     <a href="http://www.open-mpi.org/community/lists/users/2016/04/28989.php">http://www.open-mpi.org/community/lists/users/2016/04/28989.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 Subscription:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                 Link to this post:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2016/04/28990.php">http://www.open-mpi.org/community/lists/users/2016/04/28990.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2016/04/28991.php">http://www.open-mpi.org/community/lists/users/2016/04/28991.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/04/28992.php">http://www.open-mpi.org/community/lists/users/2016/04/28992.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/04/28993.php">http://www.open-mpi.org/community/lists/users/2016/04/28993.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28999.php">http://www.open-mpi.org/community/lists/users/2016/04/28999.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29010.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29008.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="28999.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29033.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29033.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
