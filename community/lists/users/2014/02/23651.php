<?
$subject_val = "Re: [OMPI users] run a program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 04:38:52 2014" -->
<!-- isoreceived="20140226093852" -->
<!-- sent="Wed, 26 Feb 2014 13:08:51 +0330" -->
<!-- isosent="20140226093851" -->
<!-- name="raha khalili" -->
<!-- email="khadije.khalili_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run a program" -->
<!-- id="CAC-SUbvNORwNYj=-D-xOJHqkDtXU4KYatkRQH-_9Sj9-FQiQwQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKbzMGfg9-ATB2-avO-rNgo1=EwRjZoEBPcUKXapvdzC+H4T8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] run a program<br>
<strong>From:</strong> raha khalili (<em>khadije.khalili_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 04:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
<li><strong>Previous message:</strong> <a href="23650.php">raha khalili: "Re: [OMPI users] run a program"</a>
<li><strong>In reply to:</strong> <a href="23649.php">jody: "Re: [OMPI users] run a program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
<li><strong>Reply:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jody
<br>
<p>Thank you for your reply. Based on hostfile examples you show me, I
<br>
understand 'slots' is number of cpus of each node I mentioned in the file,
<br>
am I true?
<br>
<p>Wishes
<br>
<p><p>On Wed, Feb 26, 2014 at 1:02 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I think you should use the &quot;--host&quot; or &quot;--hostfile&quot; options:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev1">&gt; Hope this helps
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 26, 2014 at 8:31 AM, raha khalili &lt;khadije.khalili_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is my first post in open-mpi forum and I am beginner in using mpi.
</span><br>
<span class="quotelev2">&gt;&gt; I want to run a program which does between 4 systems consist of one
</span><br>
<span class="quotelev2">&gt;&gt; server and three nodes with 20 cpus. When I run: *mpirun -np 20
</span><br>
<span class="quotelev2">&gt;&gt; /home/khalili/espresso-5.0.2/bin/pw.x -in si.in &lt;<a href="http://si.in">http://si.in</a>&gt; | tee si.out*, after writing htop from terminal, it seems the program doesn't use cpus
</span><br>
<span class="quotelev2">&gt;&gt; of three other nodes and just use the cpus of server. Could you tell me
</span><br>
<span class="quotelev2">&gt;&gt; please how do I can use all my cpus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Khadije Khalili
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D Student of Solid-State Physics
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics
</span><br>
<span class="quotelev2">&gt;&gt; University of Mazandaran
</span><br>
<span class="quotelev2">&gt;&gt; Babolsar, Iran
</span><br>
<span class="quotelev2">&gt;&gt; kh.khalili_at_[hidden]
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
Khadije Khalili
Ph.D Student of Solid-State Physics
Department of Physics
University of Mazandaran
Babolsar, Iran
kh.khalili_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
<li><strong>Previous message:</strong> <a href="23650.php">raha khalili: "Re: [OMPI users] run a program"</a>
<li><strong>In reply to:</strong> <a href="23649.php">jody: "Re: [OMPI users] run a program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
<li><strong>Reply:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
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
