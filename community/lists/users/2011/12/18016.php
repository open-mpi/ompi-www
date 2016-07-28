<?
$subject_val = "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 16:15:47 2011" -->
<!-- isoreceived="20111220211547" -->
<!-- sent="Tue, 20 Dec 2011 16:15:42 -0500" -->
<!-- isosent="20111220211542" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband" -->
<!-- id="BB12149D-782D-4C9D-9ECE-0D0C3F48877F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA96400131D02B8985_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 16:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18017.php">Jonathan Dursi: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18015.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additionally, if your Torque libraries are shared library objects, you'll *need* them on the slave nodes.
<br>
<p>On Dec 19, 2011, at 12:21 AM, Addepalli, Srirangam V wrote:
<br>
<p><span class="quotelev1">&gt; Hello Chai,
</span><br>
<span class="quotelev1">&gt; Try copying the libraries to your localnode to /usr/local/ and rebuild on the slave nodes.
</span><br>
<span class="quotelev1">&gt; Just tested and it appears to work.
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Chaitanya Krishna
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, December 18, 2011 6:26 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello there,
</span><br>
<span class="quotelev1">&gt; I am trying to compile openmpi with Torque and Infiniband.
</span><br>
<span class="quotelev1">&gt; The thing is that Torque is installed on the headnode and the
</span><br>
<span class="quotelev1">&gt; Infiniband installation is available only on the slave nodes. I am
</span><br>
<span class="quotelev1">&gt; trying to build openmpi on a slave node with the following configure
</span><br>
<span class="quotelev1">&gt; options.
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/opt/openmpi/1.4.4/intel12/infiniband
</span><br>
<span class="quotelev1">&gt; --with-openib --with-tm=/usr/local F77=ifort FC=ifort CC=icc CXX=icpc
</span><br>
<span class="quotelev1">&gt; The configure fails as it fails to find the Torque libraries (tm.h).
</span><br>
<span class="quotelev1">&gt; But I know for sure that the torque libraries are available on the
</span><br>
<span class="quotelev1">&gt; head node at /usr/local.
</span><br>
<span class="quotelev1">&gt; So, I would like to know if there is a way to make configure force to
</span><br>
<span class="quotelev1">&gt; build support for Torque even if it does not find the libraries for
</span><br>
<span class="quotelev1">&gt; Torque on the slave node.
</span><br>
<span class="quotelev1">&gt; Thanks for any help in advance.
</span><br>
<span class="quotelev1">&gt; Best regards,Chai
</span><br>
<span class="quotelev1">&gt; --42
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18017.php">Jonathan Dursi: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18015.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
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
