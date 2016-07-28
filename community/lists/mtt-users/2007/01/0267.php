<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 15:25:55 2007" -->
<!-- isoreceived="20070119202555" -->
<!-- sent="Fri, 19 Jan 2007 15:25:44 -0500" -->
<!-- isosent="20070119202544" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Minor bug found in MTT 2 client side." -->
<!-- id="20070119202543.GA8439_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070119185716.GD39149_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 15:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0268.php">Ethan Mallove: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Jeff Squyres: "[MTT users] New funclets"</a>
<li><strong>In reply to:</strong> <a href="0265.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just remembered where I put the examples Josh sent me :)
<br>
<p>Here are some attempts at getting reporter.php to do similar
<br>
things to your custom report(s).
<br>
<p>Summary page:
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=74">http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=74</a>
<br>
<p>Display test name, np, and duration (for ''intel'' tests
<br>
only):
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=75">http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=75</a>
<br>
<p>Clicking the down arrow to the right of the duration header
<br>
sorts the results, ''longest'' running time first:
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=76">http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=76</a>
<br>
<p>Next, it looks like you want to split out 32/64-bit results.
<br>
Do they have identifiable configure arguments? Sun has two
<br>
sets of configure arguments ('-xarch=v8' for 32 and
<br>
'-xarch=v9' for 64), which can be reported on like so:
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=66">http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=66</a>
<br>
<p>-Ethan
<br>
<p><p>On Fri, Jan/19/2007 01:57:16PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if reporter.php can help out some here. IIRC, a
</span><br>
<span class="quotelev1">&gt; major advantage of your parsing scripts was to see results
</span><br>
<span class="quotelev1">&gt; of individual MTT invocations, and characteristics of
</span><br>
<span class="quotelev1">&gt; invocations that reporter.php wasn't able to show.
</span><br>
<span class="quotelev1">&gt; reporter.php now keeps track of results ''by invocation''
</span><br>
<span class="quotelev1">&gt; much more systematically then before.  Could you give me a
</span><br>
<span class="quotelev1">&gt; use case of what you want you want in a report? (Or point me
</span><br>
<span class="quotelev1">&gt; to some examples in ompi-tests/trunk/iu/mtt - Josh had some
</span><br>
<span class="quotelev1">&gt; mock ups of your reports, but I lost track of them.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan/19/2007 11:50:54AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 19, 2007, at 8:55 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry, I wasn't clear.  The current output for each test
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the  debug file usually includes a line &quot;test_result:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; X&quot; with X replaced by a number.  However, for tests that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail outright, this line is missing.  This  missing line
</span><br>
<span class="quotelev3">&gt; &gt; &gt; happened to correspond to the tests that had a newline
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the  result message that I discussed (snipped) above.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please don't put in the parentheses things.  That was just me  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; commenting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on which number meant what.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I forgot to mention -- let me know where you land on the whole  
</span><br>
<span class="quotelev2">&gt; &gt; &quot;continue to parse debug output&quot; vs. &quot;write an MTT reporter&quot; issue.   
</span><br>
<span class="quotelev2">&gt; &gt; If you write a new reporter, this particular issue ^^ is moot.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0267/mtt-email-example.txt">mtt-email-example.txt</a>
</ul>
<!-- attachment="mtt-email-example.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0268.php">Ethan Mallove: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Jeff Squyres: "[MTT users] New funclets"</a>
<li><strong>In reply to:</strong> <a href="0265.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
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
