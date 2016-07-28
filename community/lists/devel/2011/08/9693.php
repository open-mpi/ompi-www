<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 08:26:50 2011" -->
<!-- isoreceived="20110825122650" -->
<!-- sent="Thu, 25 Aug 2011 14:25:52 +0200" -->
<!-- isosent="20110825122552" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="4E563F50.4010207_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="991D1265-0CC7-4467-95AF-9FEF1A3E1FB1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL code ready for review<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 08:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9694.php">Chris Samuel: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>Previous message:</strong> <a href="9692.php">Jayavant Patil: "[OMPI devel] Communication between Torque and open MPI"</a>
<li><strong>In reply to:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/23/2011 04:35 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 23, 2011, at 9:54 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I modified the code, copyright comments added.
</span><br>
<span class="quotelev1">&gt; I added your fixes to <a href="https://bitbucket.org/jsquyres/ompi-tipc">https://bitbucket.org/jsquyres/ompi-tipc</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And about configure.m4, sorry I was not clear before, tipc.h is under /usr/include/linux/tipc.h, not under include directly.
</span><br>
<span class="quotelev1">&gt; Can you edit your configure.m4 directly and test it and whatnot?  I provided the configure.m4 as a starting point for you.  :-)  It shouldn't be hard to make it check linux/tipc.h instead of tipc.h.  I'm happy to give you direct write access to the bitbucket, if you want it.
</span><br>
I think me having write access is convenient for both of us :)
<br>
<span class="quotelev1">&gt; As we've discussed off-list, we can't take the code upstream until the contributor agreement is signed, unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
The agreement thing is ongoing right now, but it may take some time. But 
<br>
to save time, can you guys do some test on TIPC BTL, so that
<br>
when the agreement is ready, the code can be used?
<br>
<span class="quotelev2">&gt;&gt; I have done some tests using tools like NetPIPE, osu and IMB and the result shows that TIPC BTL has a better performance
</span><br>
<span class="quotelev2">&gt;&gt; than TCP BTL.
</span><br>
<span class="quotelev1">&gt; Great!  Can you share any results?
</span><br>
Yes, please check the appendix for the results using IMB 3.2.
<br>
<p>I have done the tests on 2 computers. Dell SC1435
<br>
Dual-Core AMD Opteron(tm) Processor 2212 HE x 2
<br>
4 GB Mem
<br>
Ubuntu Server 10.04 LTS 32-bit Linux 2.6.32-24
<br>
<p><p><span class="quotelev1">&gt; Have you been able to compare it to the sm BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9693/imb_result.tar">imb_result.tar</a>
</ul>
<!-- attachment="imb_result.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9694.php">Chris Samuel: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>Previous message:</strong> <a href="9692.php">Jayavant Patil: "[OMPI devel] Communication between Torque and open MPI"</a>
<li><strong>In reply to:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
