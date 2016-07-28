<?
$subject_val = "Re: [OMPI users] Configuring with torque: error and patch";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 30 13:26:29 2010" -->
<!-- isoreceived="20100530172629" -->
<!-- sent="Sun, 30 May 2010 11:26:19 -0600" -->
<!-- isosent="20100530172619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuring with torque: error and patch" -->
<!-- id="4162DED0-5D07-4B14-BAEC-35EBE20104FA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C028EAE.9060000_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuring with torque: error and patch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-30 13:26:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13187.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Previous message:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>In reply to:</strong> <a href="13184.php">John Cary: "[OMPI users] Configuring with torque: error and patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's strange - haven't seen that on other Torque systems. How did you configure it?
<br>
<p><p>On May 30, 2010, at 10:13 AM, John Cary wrote:
<br>
<p><span class="quotelev1">&gt; Upon configuring and building openmpi on a system with
</span><br>
<span class="quotelev1">&gt; torque, I repeatedly got build errors of the sort,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG -finline-functions -pthread   -o ompi_info components.o ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -O3 -DNDEBUG -finline-functions -pthread -o .libs/ompi_info components.o ompi_info.o output.o param.o version.o  ../../../ompi/.libs/libmpi.so -L/usr/local/torque-2.4.0b1/lib /scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so /scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/usr/local/contrib/openmpi-1.4.2-nodl/lib
</span><br>
<span class="quotelev1">&gt; /scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: undefined reference to `tm_spawn'
</span><br>
<span class="quotelev1">&gt; /scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: undefined reference to `tm_poll'
</span><br>
<span class="quotelev1">&gt; /scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: undefined reference to `tm_finalize'
</span><br>
<span class="quotelev1">&gt; /scr_multipole/cary/facetspkgs/builds/openmpi-1.4.2/nodl/orte/.libs/libopen-rte.so: undefined reference to `tm_init'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which I fixed by adding one or the other of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(ORTE_WRAPPER_EXTRA_LDFLAGS) $(ORTE_WRAPPER_EXTRA_LIBS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(OMPI_WRAPPER_EXTRA_LDFLAGS) $(OMPI_WRAPPER_EXTRA_LIBS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to various LDADD variables.  I doubt that this is consistent
</span><br>
<span class="quotelev1">&gt; with how your build system is designed, but it works for me.
</span><br>
<span class="quotelev1">&gt; I am sending you the diff in case it helps you in any way.
</span><br>
<span class="quotelev1">&gt; BTW, I also fixed some blanks after backslashes in
</span><br>
<span class="quotelev1">&gt; contrib/Makefile.am.  This is also in the attached patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best....John Cary
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.4.2.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13187.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Previous message:</strong> <a href="13185.php">Doug Reeder: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>In reply to:</strong> <a href="13184.php">John Cary: "[OMPI users] Configuring with torque: error and patch"</a>
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
