<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 12:19:34 2008" -->
<!-- isoreceived="20080814161934" -->
<!-- sent="Thu, 14 Aug 2008 12:19:15 -0400" -->
<!-- isosent="20080814161915" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="48A45B03.6080004_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.21.1218729605.2674.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM btl slows down bandwidth?<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-14 12:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6343.php">Anugraha Sankaranarayanan: "[OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6341.php">Jeff Squyres: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Maybe in reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6346.php">Tim Mattox: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6346.php">Tim Mattox: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interestingly enough on the SPARC platform the Solaris memcpy's actually 
<br>
use non-temporal stores for copies &gt;= 64KB.  By default some of the mca 
<br>
parameters to the sm BTL stop at 32KB.  I've done experimentations of 
<br>
bumping the sm segment sizes to above 64K and seen incredible speedup on 
<br>
our M9000 platforms.  I am looking for some nice way to integrate a 
<br>
memcpy that lowers this boundary to 32KB or lower into Open MPI. 
<br>
<p>I have not looked into whether Solaris x86/x64 memcpy's use the 
<br>
non-temporal stores or not.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 14 Aug 2008 09:28:59 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SM btl slows down bandwidth?
</span><br>
<span class="quotelev1">&gt; To: rbbrigh_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;562557EB-857C-4CA8-97AD-F294C7FEDC77_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this time, we are not using non-temporal stores for shared memory  
</span><br>
<span class="quotelev1">&gt; operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2008, at 11:46 AM, Ron Brightwell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; [...]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPICH2 manages to get about 5GB/s in shared memory performance on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Xeon 5420 system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does the sm btl use a memcpy with non-temporal stores like MPICH2?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This can be a big win for bandwidth benchmarks that don't actually
</span><br>
<span class="quotelev3">&gt;&gt; &gt; touch their receive buffers at all...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Ron
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Jeff Squyres Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6343.php">Anugraha Sankaranarayanan: "[OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6341.php">Jeff Squyres: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Maybe in reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6346.php">Tim Mattox: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6346.php">Tim Mattox: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
