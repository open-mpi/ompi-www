<?
$subject_val = "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 11:18:35 2008" -->
<!-- isoreceived="20081119161835" -->
<!-- sent="Wed, 19 Nov 2008 17:18:25 +0100" -->
<!-- isosent="20081119161825" -->
<!-- name="Fran&#231;ois PELLEGRINI" -->
<!-- email="francois.pellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)" -->
<!-- id="49243C51.8050102_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4924292D.5010602_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)<br>
<strong>From:</strong> Fran&#231;ois PELLEGRINI (<em>francois.pellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 11:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Shiqing,
<br>
<p>Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Dear Fran&#231;ois,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your report, it's really a great help for us. :-)
</span><br>
<p>No problem. Your software helps me too, so as soon as you have fixes
<br>
and new builds please tell me, so that I can try again.
<br>
<p><span class="quotelev1">&gt; For the issues:
</span><br>
<p><span class="quotelev1">&gt; 1)  When you got &quot;Conditional jump&quot; errors, normally that means some
</span><br>
<span class="quotelev1">&gt; uninitialized(or undefined) values were used. The parameters that passed
</span><br>
<span class="quotelev1">&gt; into  PMPI_Init_thread might contain uninitialized values, which could
</span><br>
<span class="quotelev1">&gt; cause errors (even seg-fault) later. I need some time to run your
</span><br>
<span class="quotelev1">&gt; application to check where these values exactly are. I'll post another
</span><br>
<span class="quotelev1">&gt; email when it's done.
</span><br>
<p>OK. For this specific problem, though, you do not
<br>
need Scotch. The involved lines are just below :
<br>
<p>#define SCOTCH_PTHREAD
<br>
<p>int
<br>
main (
<br>
int                 argc,
<br>
char *              argv[])
<br>
{
<br>
&nbsp;&nbsp;...
<br>
#ifdef SCOTCH_PTHREAD
<br>
&nbsp;&nbsp;int                 thrdlvlreqval;
<br>
&nbsp;&nbsp;int                 thrdlvlproval;
<br>
#endif /* SCOTCH_PTHREAD */
<br>
<p>#ifdef SCOTCH_PTHREAD
<br>
&nbsp;&nbsp;thrdlvlreqval = MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;if (MPI_Init_thread (&amp;argc, &amp;argv, thrdlvlreqval, &amp;thrdlvlproval) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errorPrint (&quot;main: Cannot initialize (1)&quot;);
<br>
&nbsp;&nbsp;if (thrdlvlreqval &gt; thrdlvlproval)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errorPrint (&quot;main: MPI implementation is not thread-safe: recompile without
<br>
SCOTCH_PTHREAD&quot;);
<br>
#else /* SCOTCH_PTHREAD */
<br>
&nbsp;&nbsp;if (MPI_Init (&amp;argc, &amp;argv) != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errorPrint (&quot;main: Cannot initialize (2)&quot;);
<br>
#endif /* SCOTCH_PTHREAD */
<br>
<p>...and the line I used to run it was in my previous post.
<br>
I don't see the problem in my coding. What did I do wrong ?
<br>
If you want a Scotch tarball to play with, tell me : the
<br>
release on the forge is currenlty a 5.1.2, and I am close
<br>
to releasing a 5.1.3 (I will fix my double-Isend bug before,
<br>
see below), so I can provide you with a 5.1.3beta along
<br>
with my test data.
<br>
<p>[...]
<br>
<span class="quotelev1">&gt; 4)  Well, this sounds reasonable, but according to the MPI-1 standard
</span><br>
<span class="quotelev1">&gt; (see page 40 for non-blocking send/recv, a more detailed explanation in
</span><br>
<span class="quotelev1">&gt; page 30):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;A nonblocking send call indicates that the system may start copying
</span><br>
<span class="quotelev1">&gt; data out of the send buffer. The sender should */not access*/ any part
</span><br>
<span class="quotelev1">&gt; of the send buffer after a nonblocking send operation is called, until
</span><br>
<span class="quotelev1">&gt; the send completes.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So before calling MPI_Wait to complete an isend operation, any access to
</span><br>
<span class="quotelev1">&gt; the send buffer is illegal. It might be a little strict, but we have to
</span><br>
<span class="quotelev1">&gt; do what the standard says.
</span><br>
<p>Agreed. I will rewrite my piece of code accordingly. I told
<br>
you there might be bugs in my code.  ;-)
<br>
<p>Best regards,
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f.p.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
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
