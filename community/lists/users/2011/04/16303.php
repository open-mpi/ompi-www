<?
$subject_val = "Re: [OMPI users] Removing Portals BTLs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 14:03:36 2011" -->
<!-- isoreceived="20110421180336" -->
<!-- sent="Thu, 21 Apr 2011 12:03:26 -0600" -->
<!-- isosent="20110421180326" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Removing Portals BTLs" -->
<!-- id="B8FD13AD-2077-4221-B046-9E761D771E89_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20110421T192358-117_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Removing Portals BTLs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 14:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16302.php">Paul Monday: "[OMPI users] Removing Portals BTLs"</a>
<li><strong>In reply to:</strong> <a href="16302.php">Paul Monday: "[OMPI users] Removing Portals BTLs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure - instead of what you did, just add --without-portals to your original configure. The exact option depends on what portals you have installed.
<br>
<p>Here is the relevant part of the &quot;./configure -h&quot; output:
<br>
<p>&nbsp;&nbsp;--with-portals=DIR      Specify the installation directory of PORTALS
<br>
&nbsp;&nbsp;--with-portals-libs=LIBS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libraries to link with for portals
<br>
&nbsp;&nbsp;--with-portals4(=DIR)   Build Portals4 support, optionally adding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIR/include, DIR/lib, and DIR/lib64 to the search
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path for headers and libraries
<br>
&nbsp;&nbsp;--with-portals4-libdir=DIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search for Portals4 libraries in DIR
<br>
<p>Just do --without-portals or --without-portals4 (you don't need the matching libdir option), whichever matches what you have.
<br>
<p><p><p><p>On Apr 21, 2011, at 11:34 AM, Paul Monday wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to get rid of the following error message when I use mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: &quot;mca_ess_portals_utcp&quot; does not appear to be a valid
</span><br>
<span class="quotelev1">&gt; ess MCA dynamic component (ignored):
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_ess_portals_utcp.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mca_ess_portals_utcp_component
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to remove the portals components altogether...here's why:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I originally built openmpi, I used a simple configuration string:
</span><br>
<span class="quotelev1">&gt; ./configure --with-threads=posix --enable-mpi-threads --with-openib=/usr
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/usr/lib64 --disable-mpi-cxx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This gives me an error while the make is running, most likely a problem with my
</span><br>
<span class="quotelev1">&gt; Portals installation.  So, I just want to skip Portals BTLs.
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /usr/local/lib/libp3api.a(libp3api_a-acl.o): relocation
</span><br>
<span class="quotelev1">&gt; R_X86_64_32S against `p3_api_process' can not be used when making a shared
</span><br>
<span class="quotelev1">&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libp3api.a: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/mnt/shared/apps/openmpi-1.4.3/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/mnt/shared/apps/openmpi-1.4.3/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I changed the configuration to:
</span><br>
<span class="quotelev1">&gt; ./configure --with-threads=posix --enable-mpi-threads --with-openib=/usr
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/usr/lib64 --disable-mpi-cxx
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-portals,ess-portals_utcp,common-portals,mtl-portals
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This allowed OpenMPI to build, but then I receive the runtime error above.  Is
</span><br>
<span class="quotelev1">&gt; there a way to stop the Portals pieces from even trying to build and run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Monday
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16302.php">Paul Monday: "[OMPI users] Removing Portals BTLs"</a>
<li><strong>In reply to:</strong> <a href="16302.php">Paul Monday: "[OMPI users] Removing Portals BTLs"</a>
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
