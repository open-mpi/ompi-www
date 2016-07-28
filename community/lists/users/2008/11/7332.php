<?
$subject_val = "Re: [OMPI users] how to get openMPI working, someone help me.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 11:15:53 2008" -->
<!-- isoreceived="20081118161553" -->
<!-- sent="Tue, 18 Nov 2008 20:15:44 +0400" -->
<!-- isosent="20081118161544" -->
<!-- name="Venu Gopal" -->
<!-- email="venudxb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to get openMPI working, someone help me." -->
<!-- id="82b4d5c90811180815i25c68be9g3dc7b54558695c45_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="18722.49650.821590.475942_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to get openMPI working, someone help me.<br>
<strong>From:</strong> Venu Gopal (<em>venudxb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-18 11:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7333.php">Gabriele Fatigati: "[OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7331.php">Dirk Eddelbuettel: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>In reply to:</strong> <a href="7331.php">Dirk Eddelbuettel: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, the version number 8.04.1 was the version number of the Ubuntu JeOS.
<br>
<p>Very similar to the Ubuntu Server but with a optimized kernel for VmWare.
<br>
<p>see the link here.
<br>
<a href="http://cdimage.ubuntu.com/jeos/releases/8.04.1/release/">http://cdimage.ubuntu.com/jeos/releases/8.04.1/release/</a>
<br>
<p>well i searched the repositories, but could not find anything for a few
<br>
days. so i thought that it has to be installed using the tar.gz file.
<br>
<p>thanks for pointing out that is there in the repos.
<br>
<p><p>Well i am actually waiting for the Debian Lenny release. Once my testing on
<br>
VmWare is over. My plan is to use real machines. And definitely it will be
<br>
Lenny.
<br>
<p><p>Thanks
<br>
<p>Regards
<br>
<p>Venu Gopal
<br>
<p><p>On Tue, Nov 18, 2008 at 5:24 PM, Dirk Eddelbuettel &lt;edd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 18 November 2008 at 17:06, Venu Gopal wrote:
</span><br>
<span class="quotelev1">&gt; | Hello,
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | I am new into this mailing list, and am trying to install openMPI on
</span><br>
<span class="quotelev1">&gt; Ubuntu
</span><br>
<span class="quotelev1">&gt; | 8.0.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (That's not an existing version number.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | Basically my idea is to build a beowulf. Well right now i even dont have
</span><br>
<span class="quotelev1">&gt; | lots of PC's for this purpose.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | So I am planning to first use virtual machines on VmWare. I have
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev1">&gt; | around four Virtual machines on my PC. And all of them can talk to each
</span><br>
<span class="quotelev1">&gt; | other. I mean they are all networked together without any firewalls in
</span><br>
<span class="quotelev1">&gt; | between.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | I downloaded openmpi-1.2.8.tar.gz, extracted it and executed the
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; | script file.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | This gave me lots of errors, and didnt suceed. How do I get this working
</span><br>
<span class="quotelev1">&gt; | now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPi is packaged for Debian and hence part of Ubuntu. So just do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ sudo apt-get install libopenmpi1 linopenmpi-dev openmpi-bin openmpi-doc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Ubuntu 8.10, this gives you Open MPI 1.2.7. In Ubuntu 8.4, you're at a
</span><br>
<span class="quotelev1">&gt; slightly older version so I suggest upgrading.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case you really want 1.2.8, by far the easiest way (and also most
</span><br>
<span class="quotelev1">&gt; general)
</span><br>
<span class="quotelev1">&gt; is to just grab the Debian source from 'Debian unstable' and rebuild on
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; system to match your libraries. That can be quasi-automated, see 'apt-get
</span><br>
<span class="quotelev1">&gt; source' and use google as this is getting off-topic for this list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt; (one of severap Debian Open MPI maintainers)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Three out of two people have difficulties with fractions.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7332/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7333.php">Gabriele Fatigati: "[OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7331.php">Dirk Eddelbuettel: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>In reply to:</strong> <a href="7331.php">Dirk Eddelbuettel: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
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
