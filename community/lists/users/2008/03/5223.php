<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program hangs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 07:11:34 2008" -->
<!-- isoreceived="20080318111134" -->
<!-- sent="Tue, 18 Mar 2008 08:11:23 -0300 (ART)" -->
<!-- isosent="20080318111123" -->
<!-- name="Giovani Faccin" -->
<!-- email="giovanifaccin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program hangs?" -->
<!-- id="718308.55144.qm_at_web33108.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20080318092658.GB12809_at_wintermute" -->
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
<strong>From:</strong> Giovani Faccin (<em>giovanifaccin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 07:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Previous message:</strong> <a href="5222.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5222.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5227.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andreas, thanks for the reply!
<br>
<p>I'm using openmpi-1.2.5. It was installed using my distro's (Gentoo) default package:
<br>
<p>&nbsp;sys-cluster/openmpi-1.2.5  USE=&quot;fortran ipv6 -debug -heterogeneous -nocxx -pbs -romio -smp -threads&quot;
<br>
<p>I've tried setting the mpi_yield_when_idle parameter as you asked. However, the program still hangs.
<br>
<p>Just in case, the command line I'm using to call it is this:
<br>
/usr/bin/mpirun --hostfile mpi-config.txt --mca mpi_yield_when_idle 1 -np 3 /home/gfaccin/desenvolvimento/Eclipse/mpiplay/Debug/mpiplay
<br>
<p>where mpi-config.txt contains the following line:
<br>
localhost slots=1
<br>
<p>Anything else I could try?
<br>
<p>Thank you!
<br>
<p>Giovani
<br>
<p>Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; escreveu: Hmm, strange. It doesn't hang for me and AFAICS it shouldn't hang at
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
<span class="quotelev1">&gt; #include 
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
       
---------------------------------
Abra sua conta no Yahoo! Mail, o &#250;nico sem limite de espa&#231;o para armazenamento! 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Previous message:</strong> <a href="5222.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5222.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5227.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
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
