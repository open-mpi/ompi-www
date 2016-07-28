<?
$subject_val = "Re: [OMPI devel] Simplified: Misuse or bug with nested types?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 20:46:55 2013" -->
<!-- isoreceived="20130424004655" -->
<!-- sent="Tue, 23 Apr 2013 17:46:49 -0700" -->
<!-- isosent="20130424004649" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simplified: Misuse or bug with nested types?" -->
<!-- id="CAAvDA15vqejdeNU_fyrzXVcGTpQPOYnOCeaz6a479QEQpVLLeg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517728E0.6070501_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 20:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Previous message:</strong> <a href="12292.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>In reply to:</strong> <a href="12292.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Reply:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>Are you testing against the Open MPI svn trunk?
<br>
I ask because on April 9 George commited a fix for the bug reported
<br>
by Thomas Jahns:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2013/04/12268.php">http://www.open-mpi.org/community/lists/devel/2013/04/12268.php</a>
<br>
<p><p>-Paul
<br>
<p><p><p>On Tue, Apr 23, 2013 at 5:35 PM, Eric Chamberland &lt;
<br>
Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your answer!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You inserted a doubt in my mind... and gave me hope... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I did some modifications on the code to help everyone:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1- it's now in &quot;C&quot;... :-)
</span><br>
<span class="quotelev1">&gt; 2- Concerning your remark about arbitrary address: I am now using the
</span><br>
<span class="quotelev1">&gt; &quot;offsetof&quot; macro defined in &quot;stddef.h&quot; to compute the offset, or
</span><br>
<span class="quotelev1">&gt; displacement needed to create the datatype
</span><br>
<span class="quotelev1">&gt; 3- I have simplified and reduced (again) the number of lines to reproduce
</span><br>
<span class="quotelev1">&gt; the error...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; see &quot;nested_bug.c&quot; attached to this mail...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output with openmpi 1.6.3:
</span><br>
<span class="quotelev1">&gt; ------------------------------**----------
</span><br>
<span class="quotelev1">&gt;  Rank 0 send this:
</span><br>
<span class="quotelev1">&gt; {{1},{{2,3},{4,5}}}
</span><br>
<span class="quotelev1">&gt;  Rank 1 received this: {{1},{{2,3},{4199789,15773951}**}} *** ERROR ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Expected output (still ok with mpich 3.0.3 and intel mpi 4):
</span><br>
<span class="quotelev1">&gt; ------------------------------**----------
</span><br>
<span class="quotelev1">&gt; Rank 0 send this:
</span><br>
<span class="quotelev1">&gt; {{1},{{2,3},{4,5}}}
</span><br>
<span class="quotelev1">&gt;  Rank 1 received this: {{1},{{2,3},{4,5}}} OK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2013-04-23 18:03, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My C++ is a bit rusty, but this does not seem correct to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're making the datatypes relative to an arbitrary address (&amp;lPtrBase)
</span><br>
<span class="quotelev2">&gt;&gt; in a static method on each class.  You really need the datatypes to be
</span><br>
<span class="quotelev2">&gt;&gt; relative to each instance's *this* pointer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing so allows MPI to read/write the data relative to the specific
</span><br>
<span class="quotelev2">&gt;&gt; instance of the objects that you're trying to send/receive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2013, at 5:01 PM, Eric Chamberland &lt;Eric.Chamberland_at_giref.**
</span><br>
<span class="quotelev2">&gt;&gt; ulaval.ca &lt;Eric.Chamberland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  another information: I just tested the example with Intel MPI 4.0.1.007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it works correctly...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the problem seems to be only with OpenMPI... which is the default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution we use... :-/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is my example code too long?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 2013-04-23 09:55, Eric Chamberland a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here is the attachment...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 04/23/2013 09:54 AM, Eric Chamberland wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have sent a previous message showing something that I think is a bug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (or maybe a misuse, but...).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I worked on the example sent to have it simplified: now it is almost
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; half of the lines of code and the structures are more simple... but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; still showing the wrong behaviour.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Briefly, we construct different MPI_datatype and nests them into a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; final
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; type which is a:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {MPI_LONG,{{MPI_LONG,MPI_CHAR}***2}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the output from OpenMPI 1.6.3:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Rank 0 send this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 0 =&gt; {{0},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 1 =&gt; {{1},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 2 =&gt; {{2},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 3 =&gt; {{3},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 4 =&gt; {{4},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 5 =&gt; {{5},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Recv returned success and everything in MPI_Status is correct after
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; receive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Rank 1 received this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 0 =&gt; {{0},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 1 =&gt; {{1},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 2 =&gt; {{2},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 3 =&gt; {{3},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 4 =&gt; {{4},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 5 =&gt; {{5},{{3,%},{-999,$}}} *** ERROR ****
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the expected output, obtained with mpich-3.0.3:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Rank 0 send this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 0 =&gt; {{0},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 1 =&gt; {{1},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 2 =&gt; {{2},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 3 =&gt; {{3},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 4 =&gt; {{4},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 5 =&gt; {{5},{{3,%},{7,5}}}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Recv returned success and everything in MPI_Status is correct after
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; receive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Rank 1 received this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 0 =&gt; {{0},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 1 =&gt; {{1},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 2 =&gt; {{2},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 3 =&gt; {{3},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 4 =&gt; {{4},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   i: 5 =&gt; {{5},{{3,%},{7,5}}} OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it related to the bug reported here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/**community/lists/devel/2013/04/**12267.php<http://www.open-mpi.org/community/lists/devel/2013/04/12267.php">http://www.open-mpi.org/**community/lists/devel/2013/04/**12267.php<http://www.open-mpi.org/community/lists/devel/2013/04/12267.php</a>&gt;?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Previous message:</strong> <a href="12292.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>In reply to:</strong> <a href="12292.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Reply:</strong> <a href="12294.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
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
