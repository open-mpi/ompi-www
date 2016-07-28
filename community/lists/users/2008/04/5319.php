<?
$subject_val = "Re: [OMPI users] iof, readline, lost stdin buffering";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 17:34:22 2008" -->
<!-- isoreceived="20080404213422" -->
<!-- sent="Fri, 4 Apr 2008 17:34:11 -0400" -->
<!-- isosent="20080404213411" -->
<!-- name="Will Portnoy" -->
<!-- email="will.portnoy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] iof, readline, lost stdin buffering" -->
<!-- id="e1ac6ccc0804041434m4713d733pc0288885bef2102b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE5DC573-4D77-493C-BF30-432D557FC338_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] iof, readline, lost stdin buffering<br>
<strong>From:</strong> Will Portnoy (<em>will.portnoy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 17:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5320.php">Matt Hughes: "[OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>Previous message:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>In reply to:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The source file is attached, and compile instructions are on the first
<br>
line.  The program takes input from readline(), does mpi stuff (spawn
<br>
and merge), and prints the line index and line length to the terminal.
<br>
<p>To reproduce, compile with should_merge set to true, then paste the
<br>
contents of main.cpp into the program (main.cpp just happens to be the
<br>
right length).  You'll see that the text appears on the terminal, only
<br>
the first line is received by readline(), and the rest diappears.  Now
<br>
paste a few lines (e.g. 5) of main.cpp, and note that each line is
<br>
returned from readline().
<br>
<p>Compile with should_merge set to false, and you can paste the entire
<br>
contents of main.cpp, and each line will be returned by readline().
<br>
<p>There may be timing issues.  The first std::cout seems to be
<br>
necessary, and doing too much in the while loop prevents the
<br>
reproduction.  It seems a bit nondeterministic.
<br>
<p>Thank you for looking at it.  I hope it reproduces for you.
<br>
<p>Will
<br>
<p>On Fri, Apr 4, 2008 at 10:32 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Apr 3, 2008, at 5:52 PM, Will Portnoy wrote:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Do you mean that you are starting it via ./my_mpi_program?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is quite odd; OMPI shouldn't be interfering much in this scenario
</span><br>
<span class="quotelev1">&gt;  -- our IO forwarding stuff mostly comes into play when mpirun is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  However, I'd like to understand what's going on here.  Could you send
</span><br>
<span class="quotelev1">&gt;  me a small sample app that shows the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Jeff Squyres
</span><br>
<span class="quotelev1">&gt;  Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5319/main.cpp">main.cpp</a>
</ul>
<!-- attachment="main.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5320.php">Matt Hughes: "[OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>Previous message:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>In reply to:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
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
