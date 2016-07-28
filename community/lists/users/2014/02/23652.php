<?
$subject_val = "Re: [OMPI users] run a program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 05:02:16 2014" -->
<!-- isoreceived="20140226100216" -->
<!-- sent="Wed, 26 Feb 2014 11:02:15 +0100" -->
<!-- isosent="20140226100215" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run a program" -->
<!-- id="CAKbzMGfj4t7X6WFK=4SbHhfpke1oDsiaGtOvbd-3KKxHaO_6kg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC-SUbvNORwNYj=-D-xOJHqkDtXU4KYatkRQH-_9Sj9-FQiQwQ_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 05:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23653.php">Filippo Spiga: "[OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23651.php">raha khalili: "Re: [OMPI users] run a program"</a>
<li><strong>In reply to:</strong> <a href="23651.php">raha khalili: "Re: [OMPI users] run a program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Raha
<br>
Yes, that is correct.
<br>
You have to make sure that max-slots is less or equal to the number of cpus
<br>
in the node to avoid oversubscribing it.
<br>
<p>Have a look at the other entries in the FAQ,  they give information on many
<br>
other options you can use.
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>Jody
<br>
<p><p>On Wed, Feb 26, 2014 at 10:38 AM, raha khalili &lt;khadije.khalili_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. Based on hostfile examples you show me, I
</span><br>
<span class="quotelev1">&gt; understand 'slots' is number of cpus of each node I mentioned in the file,
</span><br>
<span class="quotelev1">&gt; am I true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wishes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 26, 2014 at 1:02 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I think you should use the &quot;--host&quot; or &quot;--hostfile&quot; options:
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps
</span><br>
<span class="quotelev2">&gt;&gt;   Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 26, 2014 at 8:31 AM, raha khalili &lt;khadije.khalili_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Dear Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is my first post in open-mpi forum and I am beginner in using mpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to run a program which does between 4 systems consist of one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; server and three nodes with 20 cpus. When I run: *mpirun -np 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/khalili/espresso-5.0.2/bin/pw.x -in si.in &lt;<a href="http://si.in">http://si.in</a>&gt; | tee si.out*, after writing htop from terminal, it seems the program doesn't use cpus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of three other nodes and just use the cpus of server. Could you tell me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please how do I can use all my cpus.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Khadije Khalili
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D Student of Solid-State Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Mazandaran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Babolsar, Iran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kh.khalili_at_[hidden]
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Khadije Khalili
</span><br>
<span class="quotelev1">&gt; Ph.D Student of Solid-State Physics
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; University of Mazandaran
</span><br>
<span class="quotelev1">&gt; Babolsar, Iran
</span><br>
<span class="quotelev1">&gt; kh.khalili_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23653.php">Filippo Spiga: "[OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23651.php">raha khalili: "Re: [OMPI users] run a program"</a>
<li><strong>In reply to:</strong> <a href="23651.php">raha khalili: "Re: [OMPI users] run a program"</a>
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
