<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 12:36:19 2007" -->
<!-- isoreceived="20071006163619" -->
<!-- sent="Sat, 6 Oct 2007 18:36:15 +0200" -->
<!-- isosent="20071006163615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller" -->
<!-- id="D3C4FB5B-E050-4231-9FCC-91975571F5ED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070926170421.GM60776_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 12:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0134.php">Ethan Mallove: "[MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some possibilities:
<br>
<p>1. Are you using exactly the same &quot;mpirun&quot;?
<br>
2. Did you have any special environment variables set (e.g.,  
<br>
LD_LIBRARY_PATH) in one place and not the other?
<br>
3. Did you accidentally remove part or all of your scratch tree?
<br>
<p><p>On Sep 26, 2007, at 7:04 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; DoCommand::Cmd() is returning successfully from my
</span><br>
<span class="quotelev1">&gt; funclet_file, and unsuccessfully from inside the main MTT
</span><br>
<span class="quotelev1">&gt; client. E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Running command: mpicc -lmpi FZ2TaXqC0Q-hello.c
</span><br>
<span class="quotelev1">&gt;   Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt;      $x = $VAR1 = {
</span><br>
<span class="quotelev1">&gt;                'timed_out' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;                'pid' =&gt; 21698,
</span><br>
<span class="quotelev1">&gt;                'result_stdout' =&gt; '',
</span><br>
<span class="quotelev1">&gt;                'exit_status' =&gt; '0'
</span><br>
<span class="quotelev1">&gt;              };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I stuck the identical command into client/mtt, and here's
</span><br>
<span class="quotelev1">&gt; what happened:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Running command: mpicc -lmpi FZ2TaXqC0Q-hello.c
</span><br>
<span class="quotelev1">&gt;   OUT:ld: fatal: library -lmpi: not found
</span><br>
<span class="quotelev1">&gt;   OUT:ld: fatal: File processing errors. No output written to
</span><br>
<span class="quotelev1">&gt;   OUT:a.out
</span><br>
<span class="quotelev1">&gt;   Command complete, exit status: 1
</span><br>
<span class="quotelev1">&gt;      $x = $VAR1 = {
</span><br>
<span class="quotelev1">&gt;                'timed_out' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;                'pid' =&gt; 8749,
</span><br>
<span class="quotelev1">&gt;                'result_stdout' =&gt; 'ld: fatal: library -lmpi: not found
</span><br>
<span class="quotelev1">&gt;      ld: fatal: File processing errors. No output written to a.out
</span><br>
<span class="quotelev1">&gt;      ',
</span><br>
<span class="quotelev1">&gt;                'exit_status' =&gt; '256'
</span><br>
<span class="quotelev1">&gt;              };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why am I getting two different outcomes from the same command?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0134.php">Ethan Mallove: "[MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
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
