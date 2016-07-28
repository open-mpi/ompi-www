<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 08:20:28 2009" -->
<!-- isoreceived="20090802122028" -->
<!-- sent="Sun, 2 Aug 2009 00:20:23 -1200" -->
<!-- isosent="20090802122023" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="610ca1a30908020520x72d65e3at502682f1d374962a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="610ca1a30908020507v692e11e2h624e0c0fcf634ce2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob<br>
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 08:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10172.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, $HOME means your installation directory (some/path as you mentioned).
<br>
<p>On Sun, Aug 2, 2009 at 12:07 AM, Prasadcse Perera &lt;prasadcse0_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; common bashrc meant if the /home is network mounted so ignore that I guess.
</span><br>
<span class="quotelev1">&gt; Have you tried  adding
</span><br>
<span class="quotelev1">&gt;  . $HOME/OpenFOAM/OpenFOAM-1.5.x/etc/bashrc  to your ~/.bashrc on nodes ?
</span><br>
<span class="quotelev1">&gt; This will append the configurations you need from the bashrc file located
</span><br>
<span class="quotelev1">&gt; inside the directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prasad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 1, 2009 at 11:09 PM, Tomislav Maric &lt;tomislav.maric_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Prasadcse Perera wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; One workaround is you can define PATH and LD_LIBRARY_PATH in your common
</span><br>
<span class="quotelev3">&gt;&gt; &gt; .bashrc and have a resembling  paths of installation in two nodes. This
</span><br>
<span class="quotelev3">&gt;&gt; &gt; works for me nicely with my three node installation :).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for the advice. Actually I'm running OpenFOAM (read:
</span><br>
<span class="quotelev2">&gt;&gt; a program parallelized to run with Open MPI) from SLAX Live DVD, so the
</span><br>
<span class="quotelev2">&gt;&gt; installation paths are identical, as well as everything else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've added commands that set enviromental variables in .bashrc on both
</span><br>
<span class="quotelev2">&gt;&gt; nodes, but you mention &quot;common .bashrc&quot;. Common in what way? I'm sorry
</span><br>
<span class="quotelev2">&gt;&gt; for newbish question, again, I'm supposed to be a Mechanical Engineer.
</span><br>
<span class="quotelev2">&gt;&gt; :))))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenFOAM toolkit carries a separate directory for third-party support
</span><br>
<span class="quotelev2">&gt;&gt; software. In this directory there are programs for postprocessing
</span><br>
<span class="quotelev2">&gt;&gt; simulation results and analyze data and Open MPI. Therefore, in my case,
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is built in a separate directory and the build is automated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After the build of both programs, there is a special bashrc located in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; some/path/OpenFOAM/OpenFOAM-1.5-dev/etc/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that sets all the variables needed to use Open FOAM, such as
</span><br>
<span class="quotelev2">&gt;&gt; FOAM_TUTORIALS (where are the tutorials), FOAM_RUN (where is the working
</span><br>
<span class="quotelev2">&gt;&gt; dir), WM_COMPILER (what compiler to use), etc. This bashrc also sets
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH and PATH so that locally installed Open MPI can be found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried this installation on the Live DVD on my laptop with two
</span><br>
<span class="quotelev2">&gt;&gt; cores, decomposed the case and ran the simulation in parallel without a
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this information is more helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tomislav
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
<span class="quotelev1">&gt; <a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10170/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10172.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
