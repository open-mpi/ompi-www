<?
$subject_val = "Re: [OMPI devel] Simplified: Misuse or bug with nested types?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 08:16:41 2013" -->
<!-- isoreceived="20130424121641" -->
<!-- sent="Wed, 24 Apr 2013 12:16:37 +0000" -->
<!-- isosent="20130424121637" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simplified: Misuse or bug with nested types?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4404BE6B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51773776.70008_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simplified: Misuse or bug with nested types?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 08:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12296.php">Jeff Squyres (jsquyres): "[OMPI devel] Developer meeting: mid/late summer?"</a>
<li><strong>Previous message:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>In reply to:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for identifying that it was the same bug that George recently fixed.
<br>
<p>I literally committed that fix to the v1.6 tree earlier this morning.  It will therefore be in tonight's 1.6.x nightly tarball, and will be included in 1.6.5.
<br>
<p><p>On Apr 23, 2013, at 9:37 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; okay, I have compiled the sources from the trunk and it works fine now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to have reported a duplicate...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It will be in the next 1.6.X release?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2013-04-23 20:46, Paul Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you testing against the Open MPI svn trunk?
</span><br>
<span class="quotelev2">&gt;&gt; I ask because on April 9 George commited a fix for the bug reported by Thomas Jahns:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12268.php">http://www.open-mpi.org/community/lists/devel/2013/04/12268.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 23, 2013 at 5:35 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden] &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    thanks for your answer!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    You inserted a doubt in my mind... and gave me hope... :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    So I did some modifications on the code to help everyone:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    1- it's now in &quot;C&quot;... :-)
</span><br>
<span class="quotelev2">&gt;&gt;    2- Concerning your remark about arbitrary address: I am now using
</span><br>
<span class="quotelev2">&gt;&gt;    the &quot;offsetof&quot; macro defined in &quot;stddef.h&quot; to compute the offset,
</span><br>
<span class="quotelev2">&gt;&gt;    or displacement needed to create the datatype
</span><br>
<span class="quotelev2">&gt;&gt;    3- I have simplified and reduced (again) the number of lines to
</span><br>
<span class="quotelev2">&gt;&gt;    reproduce the error...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    see &quot;nested_bug.c&quot; attached to this mail...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Output with openmpi 1.6.3:
</span><br>
<span class="quotelev2">&gt;&gt;    ----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     Rank 0 send this:
</span><br>
<span class="quotelev2">&gt;&gt;    {{1},{{2,3},{4,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;     Rank 1 received this: {{1},{{2,3},{4199789,15773951}}} *** ERROR ****
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Expected output (still ok with mpich 3.0.3 and intel mpi 4):
</span><br>
<span class="quotelev2">&gt;&gt;    ----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    Rank 0 send this:
</span><br>
<span class="quotelev2">&gt;&gt;    {{1},{{2,3},{4,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;     Rank 1 received this: {{1},{{2,3},{4,5}}} OK
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Le 2013-04-23 18:03, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Sorry for the delay.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        My C++ is a bit rusty, but this does not seem correct to me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        You're making the datatypes relative to an arbitrary address
</span><br>
<span class="quotelev2">&gt;&gt;        (&amp;lPtrBase) in a static method on each class.  You really need
</span><br>
<span class="quotelev2">&gt;&gt;        the datatypes to be relative to each instance's *this* pointer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Doing so allows MPI to read/write the data relative to the
</span><br>
<span class="quotelev2">&gt;&gt;        specific instance of the objects that you're trying to
</span><br>
<span class="quotelev2">&gt;&gt;        send/receive.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Make sense?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        On Apr 23, 2013, at 5:01 PM, Eric Chamberland
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            another information: I just tested the example with Intel
</span><br>
<span class="quotelev2">&gt;&gt;            MPI 4.0.1.007 and it works correctly...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            So the problem seems to be only with OpenMPI... which is
</span><br>
<span class="quotelev2">&gt;&gt;            the default distribution we use... :-/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            Is my example code too long?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            Le 2013-04-23 09:55, Eric Chamberland a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                Sorry,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                here is the attachment...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                On 04/23/2013 09:54 AM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    I have sent a previous message showing something
</span><br>
<span class="quotelev2">&gt;&gt;                    that I think is a bug
</span><br>
<span class="quotelev2">&gt;&gt;                    (or maybe a misuse, but...).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    I worked on the example sent to have it
</span><br>
<span class="quotelev2">&gt;&gt;                    simplified: now it is almost
</span><br>
<span class="quotelev2">&gt;&gt;                    half of the lines of code and the structures are
</span><br>
<span class="quotelev2">&gt;&gt;                    more simple... but
</span><br>
<span class="quotelev2">&gt;&gt;                    still showing the wrong behaviour.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    Briefly, we construct different MPI_datatype and
</span><br>
<span class="quotelev2">&gt;&gt;                    nests them into a final
</span><br>
<span class="quotelev2">&gt;&gt;                    type which is a:
</span><br>
<span class="quotelev2">&gt;&gt;                    {MPI_LONG,{{MPI_LONG,MPI_CHAR}*2}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    Here is the output from OpenMPI 1.6.3:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                      Rank 0 send this:
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 0 =&gt; {{0},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 1 =&gt; {{1},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 2 =&gt; {{2},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 3 =&gt; {{3},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 4 =&gt; {{4},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 5 =&gt; {{5},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_Recv returned success and everything in
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_Status is correct after
</span><br>
<span class="quotelev2">&gt;&gt;                    receive.
</span><br>
<span class="quotelev2">&gt;&gt;                      Rank 1 received this:
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 0 =&gt; {{0},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 1 =&gt; {{1},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 2 =&gt; {{2},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 3 =&gt; {{3},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 4 =&gt; {{4},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 5 =&gt; {{5},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    Here is the expected output, obtained with
</span><br>
<span class="quotelev2">&gt;&gt;                    mpich-3.0.3:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                      Rank 0 send this:
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 0 =&gt; {{0},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 1 =&gt; {{1},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 2 =&gt; {{2},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 3 =&gt; {{3},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 4 =&gt; {{4},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 5 =&gt; {{5},{{3,%},{7,5}}}
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_Recv returned success and everything in
</span><br>
<span class="quotelev2">&gt;&gt;                    MPI_Status is correct after
</span><br>
<span class="quotelev2">&gt;&gt;                    receive.
</span><br>
<span class="quotelev2">&gt;&gt;                      Rank 1 received this:
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 0 =&gt; {{0},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 1 =&gt; {{1},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 2 =&gt; {{2},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 3 =&gt; {{3},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 4 =&gt; {{4},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev2">&gt;&gt;                      i: 5 =&gt; {{5},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    Is it related to the bug reported here:
</span><br>
<span class="quotelev2">&gt;&gt;                    <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12267.php">http://www.open-mpi.org/community/lists/devel/2013/04/12267.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;                    ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                    devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;            devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;            devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12296.php">Jeff Squyres (jsquyres): "[OMPI devel] Developer meeting: mid/late summer?"</a>
<li><strong>Previous message:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>In reply to:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
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
