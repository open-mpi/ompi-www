<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 05:39:08 2009" -->
<!-- isoreceived="20090802093908" -->
<!-- sent="Sat, 1 Aug 2009 21:39:04 -1200" -->
<!-- isosent="20090802093904" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="610ca1a30908020239x19679e28iadb72eab28346daa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A752352.60604_at_gmx.com" -->
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
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 05:39:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10161.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10159.php">Tomislav Maric: "[OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10159.php">Tomislav Maric: "[OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10161.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10161.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
One workaround is you can define PATH and LD_LIBRARY_PATH in your common
<br>
.bashrc and have a resembling  paths of installation in two nodes. This
<br>
works for me nicely with my three node installation :).
<br>
<p>On Sat, Aug 1, 2009 at 5:25 PM, Tomislav Maric &lt;tomislav.maric_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run an OpenFOAM simulation on two hosts on my home LAN.
</span><br>
<span class="quotelev1">&gt; I've managed to make the hosts communicate via ssh without giving
</span><br>
<span class="quotelev1">&gt; passwords as instructed on Open MPI web page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem with running mpirun is in the enviromental variables for the
</span><br>
<span class="quotelev1">&gt; non interactive login bash on the slave node. How
</span><br>
<span class="quotelev1">&gt; exactly can I tell bash where to look for the binaries and headers of
</span><br>
<span class="quotelev1">&gt; OpenFOAM and Open MPI, or to be precise, set PATH and LD_LIBRARY_PATH so
</span><br>
<span class="quotelev1">&gt; that mpirun
</span><br>
<span class="quotelev1">&gt; will work without &quot;orted command not found&quot; or similar happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been reading the instructions on the web site and I've copied the
</span><br>
<span class="quotelev1">&gt; commands that set my enviromental variables in all necessary files
</span><br>
<span class="quotelev1">&gt; (.bashrc,
</span><br>
<span class="quotelev1">&gt; .bash_profile ...), but nothing has changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My excuse is that I'm a Mechanical Engineering student. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your understanding and help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tomislav
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
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-10160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10161.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10159.php">Tomislav Maric: "[OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10159.php">Tomislav Maric: "[OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10161.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10161.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
