<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 12:08:23 2008" -->
<!-- isoreceived="20080815160823" -->
<!-- sent="Fri, 15 Aug 2008 12:08:18 -0400" -->
<!-- isosent="20080815160818" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="ea86ce220808150908t62818a21k32c49b9b6f07dca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48A45B03.6080004_at_sun.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-15 12:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6347.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6345.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6342.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6353.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6353.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry (and others),
<br>
I have previously explored this some on Linux/X86-64 and concluded that
<br>
Open MPI needs to supply it's own memcpy routine to get good sm performance,
<br>
since the memcpy supplied by glibc is not even close to optimal.
<br>
We have an unused MCA framework already set up to supply an opal_memcpy.
<br>
AFAIK, George and Brian did the original work to set up that framework.
<br>
It has been on my to-do list for awhile to start implementing
<br>
opal_memcpy components
<br>
for the architectures I have access to, and to modify OMPI to actually
<br>
use opal_memcpy
<br>
where ti makes sense.  Terry, I presume what you suggest could
<br>
be dealt with similarly when we are running/building on SPARC.
<br>
<p>Any followup discussion on this should probably happen on the
<br>
developer mailing list.
<br>
<p>On Thu, Aug 14, 2008 at 12:19 PM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Interestingly enough on the SPARC platform the Solaris memcpy's actually use
</span><br>
<span class="quotelev1">&gt; non-temporal stores for copies &gt;= 64KB.  By default some of the mca
</span><br>
<span class="quotelev1">&gt; parameters to the sm BTL stop at 32KB.  I've done experimentations of
</span><br>
<span class="quotelev1">&gt; bumping the sm segment sizes to above 64K and seen incredible speedup on our
</span><br>
<span class="quotelev1">&gt; M9000 platforms.  I am looking for some nice way to integrate a memcpy that
</span><br>
<span class="quotelev1">&gt; lowers this boundary to 32KB or lower into Open MPI.
</span><br>
<span class="quotelev1">&gt; I have not looked into whether Solaris x86/x64 memcpy's use the non-temporal
</span><br>
<span class="quotelev1">&gt; stores or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 14 Aug 2008 09:28:59 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] SM btl slows down bandwidth?
</span><br>
<span class="quotelev2">&gt;&gt; To: rbbrigh_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;562557EB-857C-4CA8-97AD-F294C7FEDC77_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this time, we are not using non-temporal stores for shared memory
</span><br>
<span class="quotelev2">&gt;&gt;  operations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 13, 2008, at 11:46 AM, Ron Brightwell wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; MPICH2 manages to get about 5GB/s in shared memory performance on the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Xeon 5420 system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Does the sm btl use a memcpy with non-temporal stores like MPICH2?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This can be a big win for bandwidth benchmarks that don't actually
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; touch their receive buffers at all...
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -Ron
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Jeff Squyres Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6347.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6345.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6342.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6353.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6353.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
