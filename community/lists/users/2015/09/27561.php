<?
$subject_val = "Re: [OMPI users] Help with Specific Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 03:59:39 2015" -->
<!-- isoreceived="20150913075939" -->
<!-- sent="Sun, 13 Sep 2015 09:59:30 +0200" -->
<!-- isosent="20150913075930" -->
<!-- name="Tobias Kloeffel" -->
<!-- email="tobias.kloeffel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with Specific Binding" -->
<!-- id="55F52CE2.7040402_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKV0k3uHd8HVeTi2+fJMk=5pJ3wt_-ubasG+qkv6djHhaA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with Specific Binding<br>
<strong>From:</strong> Tobias Kloeffel (<em>tobias.kloeffel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-13 03:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27562.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27562.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27562.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
use: --map-by core
<br>
<p>regards,
<br>
Tobias
<br>
<p>On 09/13/2015 09:41 AM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; I tried,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --map-by ppr:12:node --slot-list 0,2,4,6,8,10,12,14,16,18,20,22 
</span><br>
<span class="quotelev1">&gt; --bind-to core -np 12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it complains,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Conflicting directives for binding policy are causing the policy
</span><br>
<span class="quotelev1">&gt; to be redefined:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   New policy:   socket
</span><br>
<span class="quotelev1">&gt;   Prior policy:  CORE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check that only one policy is defined.
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Sep 13, 2015 at 2:57 AM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Try something like this instead:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &#151;map-by ppr:12:node &#151;bind-to core &#151;slot-list=0,2,4,6,8,&#133;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You&#146;ll have to play a bit with the core numbers in the slot-list
</span><br>
<span class="quotelev1">&gt;     to get the numbering right as I don&#146;t know how your machine
</span><br>
<span class="quotelev1">&gt;     numbers them, and I can&#146;t guarantee it will work - but it&#146;s worth
</span><br>
<span class="quotelev1">&gt;     a shot. If it doesn&#146;t, then I may have to add an option for such
</span><br>
<span class="quotelev1">&gt;     purposes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sep 12, 2015, at 7:39 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We've a machine as in the following picture. I'd like to run 12
</span><br>
<span class="quotelev2">&gt;&gt;     MPI procs per node each bound to 1 core, but like shown in blue
</span><br>
<span class="quotelev2">&gt;&gt;     dots in the pictures. I can use the following command to run 12
</span><br>
<span class="quotelev2">&gt;&gt;     procs per node, but PE=1 makes all the 12 processes will run in
</span><br>
<span class="quotelev2">&gt;&gt;     just 1 socket. PE=2 will make a process bind to 2 cores, which is
</span><br>
<span class="quotelev2">&gt;&gt;     not what I want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --map-by ppr:12:node:PE=1,SPAN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;     Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;image.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt;     Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt;     School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt;     Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt;     Cell 812-391-4914 &lt;tel:812-391-4914&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/09/27558.php">http://www.open-mpi.org/community/lists/users/2015/09/27558.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/09/27559.php">http://www.open-mpi.org/community/lists/users/2015/09/27559.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27560.php">http://www.open-mpi.org/community/lists/users/2015/09/27560.php</a>
</span><br>
<p><pre>
-- 
M.Sc. Tobias Kl&#246;ffel
=======================================================
Interdisciplinary Center for Molecular Materials (ICMM)
and Computer-Chemistry-Center (CCC)
Department Chemie und Pharmazie
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
N&#228;gelsbachstr. 25
D-91052 Erlangen, Germany
Room: 2.307
Phone: +49 (0) 9131 / 85 - 20421
Fax: +49 (0) 9131 / 85 - 26565
=======================================================
E-mail: tobias.kloeffel_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27562.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27560.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27562.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27562.php">Saliya Ekanayake: "Re: [OMPI users] Help with Specific Binding"</a>
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
