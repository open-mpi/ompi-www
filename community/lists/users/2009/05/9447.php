<?
$subject_val = "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 14:54:20 2009" -->
<!-- isoreceived="20090527185420" -->
<!-- sent="Wed, 27 May 2009 14:54:01 -0400" -->
<!-- isosent="20090527185401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu" -->
<!-- id="6DA8A2DA-C133-43B9-8FBC-FFF888AB5FEE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1D367926756E9848BABD800E249AA5E04BFF84_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 14:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Previous message:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9450.php">Michael Kuklik: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Joe's question is spot on target: according to your output,  
<br>
you build OMPI just fine with icc, but then the &quot;make install&quot; may  
<br>
have been issued from a different shell where icc was not in your path.
<br>
<p>On May 26, 2009, at 10:51 PM, Joe Griffin wrote:
<br>
<p><span class="quotelev1">&gt; MK,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is &quot;icc&quot; in your path?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What if you type &quot;which icc&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Michael Kuklik
</span><br>
<span class="quotelev1">&gt; Sent: Tue 5/26/2009 7:05 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] problem with installing openmpi with intel  
</span><br>
<span class="quotelev1">&gt; compiler onubuntu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to compile openmpi with intel compiler on ubuntu 9.04.
</span><br>
<span class="quotelev1">&gt; I compiled openmpi on Redhat and os x many times and I could always  
</span><br>
<span class="quotelev1">&gt; find a problem. But the error that I'm getting now, gives me no  
</span><br>
<span class="quotelev1">&gt; clues where to even search for the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my config line is a follows:
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc --prefix=/usr/local/intel/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything configures and compiles OK. But then when I try to  
</span><br>
<span class="quotelev1">&gt; install I get this error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making install in etc
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/tmp/openmpi-1.3.2/orte/etc'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/tmp/openmpi-1.3.2/orte/etc'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev1">&gt; /bin/mkdir -p /usr/local/intel/openmpi/etc
</span><br>
<span class="quotelev1">&gt; ******************************* WARNING  
</span><br>
<span class="quotelev1">&gt; ************************************
</span><br>
<span class="quotelev1">&gt; *** Not installing new openmpi-default-hostfile over existing file in:
</span><br>
<span class="quotelev1">&gt; ***   /usr/local/intel/openmpi/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; ******************************* WARNING  
</span><br>
<span class="quotelev1">&gt; ************************************
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/tmp/openmpi-1.3.2/orte/etc'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/openmpi-1.3.2/orte/etc'
</span><br>
<span class="quotelev1">&gt; Making install in .
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/tmp/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/tmp/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/usr/local/intel/openmpi/lib&quot; || /bin/mkdir -p &quot;/usr/local/ 
</span><br>
<span class="quotelev1">&gt; intel/openmpi/lib&quot;
</span><br>
<span class="quotelev1">&gt;  /bin/bash ../libtool   --mode=install /usr/bin/install -c  'libopen- 
</span><br>
<span class="quotelev1">&gt; rte.la' '/usr/local/intel/openmpi/lib/libopen-rte.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libopen-rte.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: (cd /tmp/openmpi-1.3.2/orte; /bin/bash /tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/libtool  --tag CC --mode=relink icc -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing ................ )
</span><br>
<span class="quotelev1">&gt; libtool: relink: icc -shared  runtime/.libs/orte_finalize.o  
</span><br>
<span class="quotelev1">&gt; runtime/.libs/orte_init.o runtime/.libs/orte_locks.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; orte_globals.o runtime/data_type_support/.libs/orte_dt_compare_fns.o  
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_copy_fns.o runtime/ 
</span><br>
<span class="quotelev1">&gt; data_type_support/.libs/orte_dt_print_fns.o runtime/ 
</span><br>
<span class="quotelev1">&gt; data_type_support/.libs/orte_dt_release_fns.o runtime/ 
</span><br>
<span class="quotelev1">&gt; data_type_support/.libs/orte_dt_size_fns.o runtime/ 
</span><br>
<span class="quotelev1">&gt; data_type_support/.libs/orte_dt_packing_fns.o runtime/ 
</span><br>
<span class="quotelev1">&gt; data_type_support/.libs/orte_dt_unpacking_fns.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; orte_mca_params.o runtime/.libs/orte_wait.o runtime/.libs/orte_cr.o  
</span><br>
<span class="quotelev1">&gt; runtime/.libs/..................................... -Wl,libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0 -o .libs/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.3.2/libtool: line 7847: icc: command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libopen-rte.la' with the above  
</span><br>
<span class="quotelev1">&gt; command before installing it
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/tmp/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/tmp/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool is the one from ubuntu repository i.e. 2.2.6a-1
</span><br>
<span class="quotelev1">&gt; icc and icpc are the newest ones i.e. 11.083
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ouputs of configure make and install are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clues what's wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT14318409.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Previous message:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9450.php">Michael Kuklik: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
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
