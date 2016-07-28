<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 09:52:44 2014" -->
<!-- isoreceived="20140523135244" -->
<!-- sent="Fri, 23 May 2014 16:52:24 +0300" -->
<!-- isosent="20140523135224" -->
<!-- name="&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan" -->
<!-- email="ozgur.pekcagliyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="CAA52m+Ov_i++EhPNwWHmz-ZspeBydFwCEm1xTRowXxpa24m=sQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAA52m+Npnk9ktjg1SYP30Wa3RbUAV0i74Vrwsr8CQZKBjDZ=2Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-23 09:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24463.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24461.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24461.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24466.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I assumed you were working with a group of machines (Different
<br>
computer with their own resources, connected through network). I am not
<br>
sure, if this would work in your situation. But you can still give it a
<br>
try, if you keep process 0 in waiting for receiving data, It may consume
<br>
less cpu time but again I am not sure of this.
<br>
<p><p>On Fri, May 23, 2014 at 4:49 PM, &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan &lt;
<br>
ozgur.pekcagliyan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In my codes, I am using MPI_Send and MPI_Recv functions to notify P0 that
</span><br>
<span class="quotelev1">&gt; every other process have finished their own calculations. Maybe you cal
</span><br>
<span class="quotelev1">&gt; also use the same method and keep P0 in waiting until it receives some data
</span><br>
<span class="quotelev1">&gt; from other processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 23, 2014 at 4:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...that is a bit of a problem. I've added a note to see if we can
</span><br>
<span class="quotelev2">&gt;&gt; turn down the aggressiveness of the MPI layer once we hit finalize, but
</span><br>
<span class="quotelev2">&gt;&gt; that won't solve your immediate problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our usual suggestion is that you have each proc call finalize before
</span><br>
<span class="quotelev2">&gt;&gt; going on to do other things. This avoids the situation you are describing -
</span><br>
<span class="quotelev2">&gt;&gt; after all, if the MPI phase is done, there really isn't any reason to not
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Finalize before moving on to other things. You don't have to delay
</span><br>
<span class="quotelev2">&gt;&gt; the call until the end of the program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2014, at 1:45 AM, Iv&#195;&#161;n Cores Gonz&#195;&#161;lez &lt;ivan.coresg_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have a performance problem with the next code.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       int myid;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       //Imagine some important job here, but P0 ends first.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       if (myid != 0)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               sleep(20);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       printf(&quot;Calling MPI_Finalize() ...\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       // Process 0 maintain core load at 100%.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       printf(&quot;Ok\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       return 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If some MPI threads call MPI_Finalize() while others threads are still
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;working&quot;, the MPI_Finalize() function maintains the core load in 100%
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and not allows other threads or jobs in the processor to run faster.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any idea to avoid the load or force the P0 to sleep?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ivan Cores.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
</span><br>
<span class="quotelev1">&gt; Computer Engineer (M.Sc.)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24463.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24461.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24461.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24466.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
