<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 09:49:29 2014" -->
<!-- isoreceived="20140523134929" -->
<!-- sent="Fri, 23 May 2014 16:49:08 +0300" -->
<!-- isosent="20140523134908" -->
<!-- name="&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan" -->
<!-- email="ozgur.pekcagliyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="CAA52m+Npnk9ktjg1SYP30Wa3RbUAV0i74Vrwsr8CQZKBjDZ=2Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="38381E3D-36DD-46ED-8F5F-1459A4BB3A86_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize() maintains load at 100%.<br>
<strong>From:</strong> &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan (<em>ozgur.pekcagliyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 09:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24462.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24460.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24460.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24462.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24462.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my codes, I am using MPI_Send and MPI_Recv functions to notify P0 that
<br>
every other process have finished their own calculations. Maybe you cal
<br>
also use the same method and keep P0 in waiting until it receives some data
<br>
from other processes?
<br>
<p><p>On Fri, May 23, 2014 at 4:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...that is a bit of a problem. I've added a note to see if we can turn
</span><br>
<span class="quotelev1">&gt; down the aggressiveness of the MPI layer once we hit finalize, but that
</span><br>
<span class="quotelev1">&gt; won't solve your immediate problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our usual suggestion is that you have each proc call finalize before going
</span><br>
<span class="quotelev1">&gt; on to do other things. This avoids the situation you are describing - after
</span><br>
<span class="quotelev1">&gt; all, if the MPI phase is done, there really isn't any reason to not call
</span><br>
<span class="quotelev1">&gt; MPI_Finalize before moving on to other things. You don't have to delay the
</span><br>
<span class="quotelev1">&gt; call until the end of the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 23, 2014, at 1:45 AM, Iv&#195;&#161;n Cores Gonz&#195;&#161;lez &lt;ivan.coresg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; I have a performance problem with the next code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       int myid;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       //Imagine some important job here, but P0 ends first.
</span><br>
<span class="quotelev2">&gt; &gt;       if (myid != 0)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               sleep(20);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Calling MPI_Finalize() ...\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       // Process 0 maintain core load at 100%.
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Ok\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If some MPI threads call MPI_Finalize() while others threads are still
</span><br>
<span class="quotelev2">&gt; &gt; &quot;working&quot;, the MPI_Finalize() function maintains the core load in 100%
</span><br>
<span class="quotelev2">&gt; &gt; and not allows other threads or jobs in the processor to run faster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea to avoid the load or force the P0 to sleep?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Ivan Cores.
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
&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
Computer Engineer (M.Sc.)
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24461/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24462.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24460.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24460.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24462.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24462.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
