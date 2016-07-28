<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program hangs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 07:48:37 2008" -->
<!-- isoreceived="20080318114837" -->
<!-- sent="Tue, 18 Mar 2008 07:48:09 -0400" -->
<!-- isosent="20080318114809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program hangs?" -->
<!-- id="5214B90E-AEB1-4581-B48B-C8CE1F93E00D_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="718308.55144.qm_at_web33108.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 07:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5227.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>In reply to:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5227.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two notes for you:
<br>
<p>1. Your program does necessarily guarantee what you might expect:  
<br>
since you use ANY_SOURCE/ANY_TAG in both the receives, you might  
<br>
actually get two receives from the same sender in a given iteration.   
<br>
The fact that you're effectively using yield_when_idle (which OMPI  
<br>
will automatically enable when you tell it &quot;slots=1&quot; but you run with - 
<br>
np 3) means that you probably *won't* have this happen (because every  
<br>
MPI process will yield on every iteration, effectively keeping all 3  
<br>
in lock step), but it still *can* happen (and did frequently in my  
<br>
tests).
<br>
<p>2. The problem you're seeing is an optimization called &quot;early  
<br>
completion&quot; where, for latency ping-pong optimizations, Open MPI may  
<br>
indicate that a send has &quot;completed&quot; before the message is actually  
<br>
placed on the network (shared memory, in your case).  This can be a  
<br>
nice performance boost for applications that both a) dip into the MPI  
<br>
layer frequently and b) synchronize at some point.  Your application  
<br>
is not necessarily doing this in the final iterations; it may reach  
<br>
MPI_FINALIZE while there's still a pile of messages that have been  
<br>
queued for delivery before they are actually progressed out the  
<br>
network to the receiver.  In our upcoming 1.2.6 release, there is a  
<br>
run-time parameter to disable this early completion behavior (i.e.,  
<br>
never signal completion of a send before the data is actually  
<br>
transmitted out on the network).  You can try the 1.2.6rc2 tarball:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.2/">http://www.open-mpi.org/software/ompi/v1.2/</a>
<br>
<p>And use the following MCA parameter:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml_ob1_use_early_completion 0 ...
<br>
<p>See if that works for you.
<br>
<p><p>On Mar 18, 2008, at 7:11 AM, Giovani Faccin wrote:
<br>
<p><span class="quotelev1">&gt; Hi Andreas, thanks for the reply!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openmpi-1.2.5. It was installed using my distro's (Gentoo)  
</span><br>
<span class="quotelev1">&gt; default package:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  sys-cluster/openmpi-1.2.5  USE=&quot;fortran ipv6 -debug -heterogeneous - 
</span><br>
<span class="quotelev1">&gt; nocxx -pbs -romio -smp -threads&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried setting the mpi_yield_when_idle parameter as you asked.  
</span><br>
<span class="quotelev1">&gt; However, the program still hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just in case, the command line I'm using to call it is this:
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpirun --hostfile mpi-config.txt --mca mpi_yield_when_idle  
</span><br>
<span class="quotelev1">&gt; 1 -np 3 /home/gfaccin/desenvolvimento/Eclipse/mpiplay/Debug/mpiplay
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where mpi-config.txt contains the following line:
</span><br>
<span class="quotelev1">&gt; localhost slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anything else I could try?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giovani
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; escreveu: Hmm, strange. It doesn't  
</span><br>
<span class="quotelev1">&gt; hang for me and AFAICS it shouldn't hang at
</span><br>
<span class="quotelev1">&gt; all. I'm using 1.2.5. Which version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hanging with 100% CPU utilization often means that your processes are
</span><br>
<span class="quotelev1">&gt; caught in a busy wait. You could try to set mpi_yield_when_idle:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; gentryx_at_hex ~ $ cat .openmpi/mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt; mpi_yield_when_idle=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I don't think this should be necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 21:35 Mon 17 Mar , Giovani Faccin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi there!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm learning MPI, and got really puzzled... Please take a look at  
</span><br>
<span class="quotelev1">&gt; this very short code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpicxx.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; using namespace std;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; MPI::Init();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for (unsigned long t = 0; t &lt; 10000000; t++)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; //If we are process 0:
</span><br>
<span class="quotelev2">&gt; &gt; if ( MPI::COMM_WORLD.Get_rank() == 0 )
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; MPI::Status mpi_status;
</span><br>
<span class="quotelev2">&gt; &gt; unsigned long d = 0;
</span><br>
<span class="quotelev2">&gt; &gt; unsigned long d2 = 0;
</span><br>
<span class="quotelev2">&gt; &gt; MPI::COMM_WORLD.Recv(&amp;d, 1, MPI::UNSIGNED_LONG, MPI::ANY_SOURCE,  
</span><br>
<span class="quotelev1">&gt; MPI::ANY_TAG, mpi_status );
</span><br>
<span class="quotelev2">&gt; &gt; MPI::COMM_WORLD.Recv(&amp;d2, 1, MPI::UNSIGNED_LONG, MPI::ANY_SOURCE,  
</span><br>
<span class="quotelev1">&gt; MPI::ANY_TAG, mpi_status );
</span><br>
<span class="quotelev2">&gt; &gt; cout &lt;&lt; &quot;Time = &quot; &lt;&lt; t &lt;&lt; &quot;; Node 0 received: &quot; &lt;&lt; d &lt;&lt; &quot; and &quot; &lt;&lt;  
</span><br>
<span class="quotelev1">&gt; d2 &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; //Else:
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; unsigned long d = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev2">&gt; &gt; MPI::COMM_WORLD.Send( &amp;d, 1, MPI::UNSIGNED_LONG, 0, 0);
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; MPI::Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, so what I'm trying to do is to make a gather operation using  
</span><br>
<span class="quotelev1">&gt; point to point communication. In my real application instead of  
</span><br>
<span class="quotelev1">&gt; sending an unsigned long I'd be calling an object's send and receive  
</span><br>
<span class="quotelev1">&gt; methods, which in turn would call their inner object's similar  
</span><br>
<span class="quotelev1">&gt; methods and so on until all data is syncronized. I'm using this loop  
</span><br>
<span class="quotelev1">&gt; because the number of objects to be sent to process rank 0 varies  
</span><br>
<span class="quotelev1">&gt; depending on the sender.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When running this test with 3 processes on a dual core,  
</span><br>
<span class="quotelev1">&gt; oversubscribed node, I get this output:
</span><br>
<span class="quotelev2">&gt; &gt; (skipped previous output)
</span><br>
<span class="quotelev2">&gt; &gt; Time = 5873; Node 0 received: 1 and 2
</span><br>
<span class="quotelev2">&gt; &gt; Time = 5874; Node 0 received: 1 and 2
</span><br>
<span class="quotelev2">&gt; &gt; Time = 5875; Node 0 received: 1 and 2
</span><br>
<span class="quotelev2">&gt; &gt; Time = 5876; Node 0 received: 1 and 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and then the application hangs, with processor usage at 100%. The  
</span><br>
<span class="quotelev1">&gt; exact time when this condition occurs varies on each run, but it  
</span><br>
<span class="quotelev1">&gt; usually happens quite fast.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What would I have to modify, in this simple example, so that the  
</span><br>
<span class="quotelev1">&gt; application works as expected? Must I always use Gather, instead of  
</span><br>
<span class="quotelev1">&gt; point to point, to make a syncronization like this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Giovani
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; __________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Fale com seus amigos de gra&#231;a com o novo Yahoo! Messenger
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://br.messenger.yahoo.com/">http://br.messenger.yahoo.com/</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
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
<span class="quotelev1">&gt; Abra sua conta no Yahoo! Mail, o &#250;nico sem limite de espa&#231;o para  
</span><br>
<span class="quotelev1">&gt; armazenamento! _______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5227.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>In reply to:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5227.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
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
