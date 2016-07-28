<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program hangs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 05:27:09 2008" -->
<!-- isoreceived="20080318092709" -->
<!-- sent="Tue, 18 Mar 2008 10:26:58 +0100" -->
<!-- isosent="20080318092658" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program hangs?" -->
<!-- id="20080318092658.GB12809_at_wintermute" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="678253.85452.qm_at_web33107.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Begginers question: why does this program hangs?<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 05:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
<li><strong>In reply to:</strong> <a href="5220.php">Giovani Faccin: "[OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, strange. It doesn't hang for me and AFAICS it shouldn't hang at
<br>
all. I'm using 1.2.5. Which version of Open MPI are you using? 
<br>
<p>Hanging with 100% CPU utilization often means that your processes are
<br>
caught in a busy wait. You could try to set mpi_yield_when_idle:
<br>
<p><span class="quotelev1">&gt; gentryx_at_hex ~ $ cat .openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle=1
</span><br>
<p>But I don't think this should be necessary.
<br>
<p>HTH
<br>
-Andreas
<br>
<p><p>On 21:35 Mon 17 Mar     , Giovani Faccin wrote:
<br>
<span class="quotelev1">&gt; Hi there!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm learning MPI,  and got really puzzled... Please take a look at this very short code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpicxx.h&quot;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI::Init();        
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for (unsigned long t = 0; t &lt; 10000000; t++)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         //If we are process 0:
</span><br>
<span class="quotelev1">&gt;         if ( MPI::COMM_WORLD.Get_rank() == 0 )
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             MPI::Status mpi_status;
</span><br>
<span class="quotelev1">&gt;             unsigned long d = 0;
</span><br>
<span class="quotelev1">&gt;             unsigned long d2 = 0;
</span><br>
<span class="quotelev1">&gt;             MPI::COMM_WORLD.Recv(&amp;d, 1, MPI::UNSIGNED_LONG, MPI::ANY_SOURCE, MPI::ANY_TAG, mpi_status );
</span><br>
<span class="quotelev1">&gt;             MPI::COMM_WORLD.Recv(&amp;d2, 1, MPI::UNSIGNED_LONG, MPI::ANY_SOURCE, MPI::ANY_TAG, mpi_status );
</span><br>
<span class="quotelev1">&gt;             cout &lt;&lt; &quot;Time = &quot; &lt;&lt; t &lt;&lt; &quot;; Node 0 received: &quot; &lt;&lt; d &lt;&lt; &quot; and &quot; &lt;&lt; d2 &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         //Else:
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             unsigned long  d = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;             MPI::COMM_WORLD.Send( &amp;d, 1, MPI::UNSIGNED_LONG, 0, 0);
</span><br>
<span class="quotelev1">&gt;         };
</span><br>
<span class="quotelev1">&gt;     };
</span><br>
<span class="quotelev1">&gt;     MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, so what I'm trying to do is to make a gather operation using point to point communication. In my real application instead of sending an unsigned long I'd be calling an object's send and receive methods, which in turn would call their inner object's similar methods and so on until all data is syncronized. I'm using this loop because the number of objects to be sent to process rank 0 varies depending on the sender.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running this test with 3 processes on a dual core, oversubscribed node, I get this output:
</span><br>
<span class="quotelev1">&gt; (skipped previous output)
</span><br>
<span class="quotelev1">&gt; Time = 5873; Node 0 received: 1 and 2
</span><br>
<span class="quotelev1">&gt; Time = 5874; Node 0 received: 1 and 2
</span><br>
<span class="quotelev1">&gt; Time = 5875; Node 0 received: 1 and 2
</span><br>
<span class="quotelev1">&gt; Time = 5876; Node 0 received: 1 and 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then the application hangs, with processor usage at 100%. The exact time when this condition occurs varies on each run, but it usually happens quite fast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What would I have to modify, in this simple example, so that the application works as expected? Must I always use Gather, instead of point to point, to make a syncronization like this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Giovani
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  __________________________________________________
</span><br>
<span class="quotelev1">&gt; Fale com seus amigos  de gra&#231;a com o novo Yahoo! Messenger 
</span><br>
<span class="quotelev1">&gt; <a href="http://br.messenger.yahoo.com/">http://br.messenger.yahoo.com/</a> 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5222/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
<li><strong>In reply to:</strong> <a href="5220.php">Giovani Faccin: "[OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
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
