<?
$subject_val = "Re: [OMPI users] arch question: long running app";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 10:58:37 2007" -->
<!-- isoreceived="20071206155837" -->
<!-- sent="Thu, 6 Dec 2007 15:58:32 +0000" -->
<!-- isosent="20071206155832" -->
<!-- name="doktora v" -->
<!-- email="doktora_at_[hidden]" -->
<!-- subject="Re: [OMPI users] arch question: long running app" -->
<!-- id="3398909b0712060758r6de557edt5198010d7480c860_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2112FB1C-87C6-4353-AD16-7E4207F2B21E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] arch question: long running app<br>
<strong>From:</strong> doktora v (<em>doktora_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 10:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4615.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>In reply to:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
Thanks for the detailed discussion. It certainly makes things a lot clearer,
<br>
just as I was giving up my hopes for a reply.
<br>
<p>The app is fairly heavy on communication (~10k messages per minute) and is
<br>
also embarrassingly parallel. Taking this into account, I think I'll
<br>
readjust my resilience expectations and go with MPI as it will make
<br>
communications a breeze to deal with.
<br>
<p>It does make sense to have the ability to add/remove processes on the go. In
<br>
a multi-core hardware a scheduler could add more processes to an app as the
<br>
hardware becomes freed up from other tasks. Of course that would be a
<br>
problem for apps that require some type of data synchronisation (tightly
<br>
coupled as you say). It would be nice to have the option of &quot;mpirun -min 4
<br>
-max 16&quot; and let the scheduler optimise based on availability.
<br>
<p>I'm currently running a test case on two machines with two cores each and,
<br>
after one day, so far so good. We'll see how it goes.
<br>
<p>Thanks again
<br>
dok
<br>
<p>On Dec 6, 2007 2:06 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It certainly does make sense to use MPI for such a setup.  But there
</span><br>
<span class="quotelev1">&gt; are some important things to consider:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. MPI, at its heart, is a communications system.  There's lots of
</span><br>
<span class="quotelev1">&gt; other bells and whistles (e.g., starting up a whole bunch of processes
</span><br>
<span class="quotelev1">&gt; in tandem), but at the core: it's all about passing messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. MPI tends to lend itself to a fairly tightly coupled systems.  The
</span><br>
<span class="quotelev1">&gt; usual model is that you start all of your parallel processes at the
</span><br>
<span class="quotelev1">&gt; same time (e.g., &quot;mpirun -np 32 my_application&quot;).  The current state
</span><br>
<span class="quotelev1">&gt; of technology is *not* good in terms of fault tolerance -- most MPI's
</span><br>
<span class="quotelev1">&gt; (Open MPI included) will kill the entire job if any one of those
</span><br>
<span class="quotelev1">&gt; processes die.  This is an important factor for running for weeks,
</span><br>
<span class="quotelev1">&gt; months, or years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (lots of good research is ongoing about fault tolerance and MPI, but
</span><br>
<span class="quotelev1">&gt; the existing solutions are still emphasizing tightly-coupled
</span><br>
<span class="quotelev1">&gt; applications or required a bunch of involvement from the application)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. MPI also emphasizes performance: low latency, high bandwidth, good
</span><br>
<span class="quotelev1">&gt; concurrency, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't need these things, for example, if your communication
</span><br>
<span class="quotelev1">&gt; between manager and worker is infrequent, and/or the overall
</span><br>
<span class="quotelev1">&gt; application time is not dominated by communication time, you might be
</span><br>
<span class="quotelev1">&gt; better served for [extremely] long-running applications by using a
</span><br>
<span class="quotelev1">&gt; simple (but resilient) sockets-based communication layer and not using
</span><br>
<span class="quotelev1">&gt; MPI.  I say this mainly because of the fault tolerance issues involved
</span><br>
<span class="quotelev1">&gt; and the natural hardware MTBF values that we see on today's hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2007, at 1:15 PM, doktora v wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, although I did my due diligence on searching for this question,
</span><br>
<span class="quotelev2">&gt; &gt; I apologise if this is a repeat.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From an architectural point of view does it make sense to use MPI in
</span><br>
<span class="quotelev2">&gt; &gt; the following scenario (for the purposes of resilience as much as
</span><br>
<span class="quotelev2">&gt; &gt; parallelization):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Each process is a long-running process (runs non-interrupted for
</span><br>
<span class="quotelev2">&gt; &gt; weeks, months or even years) that collects and crunches some
</span><br>
<span class="quotelev2">&gt; &gt; streaming data, for example temperature readings, and the data is
</span><br>
<span class="quotelev2">&gt; &gt; replicated to R nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because this is a diversion from the normal modus operandi (i.e. all
</span><br>
<span class="quotelev2">&gt; &gt; data is immediately available), is there any obvious MPI issues that
</span><br>
<span class="quotelev2">&gt; &gt; I am not considering in designing such an application?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is a more detailed description of the app:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A master receives the data and dispatches it according to some
</span><br>
<span class="quotelev2">&gt; &gt; function such that each tuple is replicated R times to R of the N
</span><br>
<span class="quotelev2">&gt; &gt; nodes (with R&lt;=N). Suppose that there are K regions from which
</span><br>
<span class="quotelev2">&gt; &gt; temperature readings stream in  in the form of &lt;K,T&gt; where K is the
</span><br>
<span class="quotelev2">&gt; &gt; region id and T is the temperature reading. The master sends &lt;K,T&gt;
</span><br>
<span class="quotelev2">&gt; &gt; to R of the N nodes. These nodes maintain a long-term state of, say,
</span><br>
<span class="quotelev2">&gt; &gt; the min/max readings. If R=N=2, the system is basically duplicated
</span><br>
<span class="quotelev2">&gt; &gt; and if one of the two nodes dies inadvertently, the other one still
</span><br>
<span class="quotelev2">&gt; &gt; has accounted for all the data.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is some pseudo-code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(argc, argv)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int N=10, R=3, K=200;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Init(argc,argv);
</span><br>
<span class="quotelev2">&gt; &gt; int rank=COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev2">&gt; &gt; if(rank==0) {
</span><br>
<span class="quotelev2">&gt; &gt;      int lastnode = 1;
</span><br>
<span class="quotelev2">&gt; &gt;      while(read &lt;k,T&gt; from socket)
</span><br>
<span class="quotelev2">&gt; &gt;        for(i in 0:R) COMM_WORLD.Send(&lt;k,T&gt;,1,tuple,++lastnode%N,tag);
</span><br>
<span class="quotelev2">&gt; &gt; } else {
</span><br>
<span class="quotelev2">&gt; &gt;       COMM_WORLD.Recv(&lt;k,T&gt;,1,tuple,any,tag,Info);
</span><br>
<span class="quotelev2">&gt; &gt;        process_message(&lt;k,T&gt;);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Many thanks for your time!
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Dok
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4615.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>In reply to:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
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
