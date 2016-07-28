<?
$subject_val = "Re: [OMPI users] Help with Specific Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 10:28:42 2015" -->
<!-- isoreceived="20150913142842" -->
<!-- sent="Sun, 13 Sep 2015 10:28:40 -0400" -->
<!-- isosent="20150913142840" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with Specific Binding" -->
<!-- id="CA+ssbKV2FyBQBErneQbUt6TiAN9qnpzoB2wLRm4p41W-=oUFmw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B4EE2FF3-A201-447C-A7DA-E565EC4E486C_at_open-mpi.org" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-13 10:28:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27566.php">Gilles Gouaillardet: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27564.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27564.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27566.php">Gilles Gouaillardet: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27566.php">Gilles Gouaillardet: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27567.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, I'll try this. Also, is there a way to know which core a process
<br>
is bound to within the program other than executing something like taskset
<br>
&lt;PID&gt; from program?
<br>
<p>On Sun, Sep 13, 2015 at 10:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually, the error was correct - it was me that was incorrect. The
</span><br>
<span class="quotelev1">&gt; correct set of options would be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;map-by ppr:12_node &#226;&#128;&#148;bind-to core &#226;&#128;&#148;cpu-set=0,2,4,&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about the confusion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2015, at 2:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rankfile will certainly do it, but that error is a bug and I&#226;&#128;&#153;ll have
</span><br>
<span class="quotelev1">&gt; to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2015, at 1:10 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could get it working by manually generating a rankfile all the ranks and
</span><br>
<span class="quotelev1">&gt; not using any --map-by options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try the --map-by core as well
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Sep 13, 2015 at 3:59 AM, Tobias Kloeffel &lt;tobias.kloeffel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; use: --map-by core
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tobias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 09/13/2015 09:41 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --map-by ppr:12:node --slot-list 0,2,4,6,8,10,12,14,16,18,20,22
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to core -np 12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but it complains,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Conflicting directives for binding policy are causing the policy
</span><br>
<span class="quotelev2">&gt;&gt; to be redefined:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   New policy:   socket
</span><br>
<span class="quotelev2">&gt;&gt;   Prior policy:  CORE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please check that only one policy is defined.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Sep 13, 2015 at 2:57 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try something like this instead:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#226;&#128;&#148;map-by ppr:12:node &#226;&#128;&#148;bind-to core &#226;&#128;&#148;slot-list=0,2,4,6,8,&#226;&#128;&#166;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You&#226;&#128;&#153;ll have to play a bit with the core numbers in the slot-list to get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the numbering right as I don&#226;&#128;&#153;t know how your machine numbers them, and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can&#226;&#128;&#153;t guarantee it will work - but it&#226;&#128;&#153;s worth a shot. If it doesn&#226;&#128;&#153;t, then I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may have to add an option for such purposes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 12, 2015, at 7:39 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've a machine as in the following picture. I'd like to run 12 MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs per node each bound to 1 core, but like shown in blue dots in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pictures. I can use the following command to run 12 procs per node, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PE=1 makes all the 12 processes will run in just 1 socket. PE=2 will make a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process bind to 2 cores, which is not what I want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --map-by ppr:12:node:PE=1,SPAN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27558.php">http://www.open-mpi.org/community/lists/users/2015/09/27558.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27559.php">http://www.open-mpi.org/community/lists/users/2015/09/27559.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27560.php">http://www.open-mpi.org/community/lists/users/2015/09/27560.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; M.Sc. Tobias Kl&#195;&#182;ffel
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================
</span><br>
<span class="quotelev2">&gt;&gt; Interdisciplinary Center for Molecular Materials (ICMM)
</span><br>
<span class="quotelev2">&gt;&gt; and Computer-Chemistry-Center (CCC)
</span><br>
<span class="quotelev2">&gt;&gt; Department Chemie und Pharmazie
</span><br>
<span class="quotelev2">&gt;&gt; Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg
</span><br>
<span class="quotelev2">&gt;&gt; N&#195;&#164;gelsbachstr. 25
</span><br>
<span class="quotelev2">&gt;&gt; D-91052 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Room: 2.307
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49 (0) 9131 / 85 - 20421
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49 (0) 9131 / 85 - 26565
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E-mail: tobias.kloeffel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27561.php">http://www.open-mpi.org/community/lists/users/2015/09/27561.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27562.php">http://www.open-mpi.org/community/lists/users/2015/09/27562.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27564.php">http://www.open-mpi.org/community/lists/users/2015/09/27564.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27566.php">Gilles Gouaillardet: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27564.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>In reply to:</strong> <a href="27564.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27566.php">Gilles Gouaillardet: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27566.php">Gilles Gouaillardet: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27567.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
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
