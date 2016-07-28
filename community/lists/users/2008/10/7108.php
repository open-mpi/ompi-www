<?
$subject_val = "Re: [OMPI users] ADIOI_GEN_DELETE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 18:06:10 2008" -->
<!-- isoreceived="20081027220610" -->
<!-- sent="Mon, 27 Oct 2008 17:06:03 -0500" -->
<!-- isosent="20081027220603" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ADIOI_GEN_DELETE" -->
<!-- id="49063B4B.9070100_at_cs.uh.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2B009941-B8E6-4D03-8F81-6A4CEB0D9636_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ADIOI_GEN_DELETE<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 18:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7109.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="7106.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7297.php">Robert Latham: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
is the code using shared file pointer operations (e.g. 
<br>
MPI_File_write_shared/ordered)?
<br>
<p>There was a fix which removed a warning/error about not being  to delete 
<br>
the file when using shared file pointer around v.1.2.6 ( I don't 
<br>
remember precisely when it hit the trunk), and I was wandering whether 
<br>
that's the message that you see. The message was in reality dealing with 
<br>
&nbsp;&nbsp;removing a 'hidden' file used for shared file pointer operations
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; After a little digging, I am able to run your code (it looks like it 
</span><br>
<span class="quotelev1">&gt; expects both an input file and an output file on the command line, or it 
</span><br>
<span class="quotelev1">&gt; segv's).  But I don't get those errors, either with OMPI v1.2.8 or the 
</span><br>
<span class="quotelev1">&gt; upcoming v1.3 series; I ran with as many as 16 processes across 4 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you narrow the problem down a bit more?  You still didn't provide 
</span><br>
<span class="quotelev1">&gt; too many details about the problem. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2008, at 5:27 PM, Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Oct 27, 2008 at 6:48 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't seem to run your code, either.  Can you provide a more precise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; description of what exactly is happening?  It's quite possible / 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that Rob's old post is the answer, but I can't tell from your 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; original post
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- there just aren't enough details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I execute this code with more than once process (-n &gt; 1), this
</span><br>
<span class="quotelev2">&gt;&gt; error message appear. My code is a distributed compressor, that the
</span><br>
<span class="quotelev2">&gt;&gt; compress task is distributed. A single process reads a block from a
</span><br>
<span class="quotelev2">&gt;&gt; file, compress it and writes a compressed block to a file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 27, 2008, at 3:26 AM, jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps this post in the Open-MPI archives can help:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/01/4898.php">http://www.open-mpi.org/community/lists/users/2008/01/4898.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I already saw this post before, but this didn't help me. I'm not using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_delete in my code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Davi Vercillo Carneiro Garcia
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://davivercillo.blogspot.com/">http://davivercillo.blogspot.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Universidade Federal do Rio de Janeiro
</span><br>
<span class="quotelev2">&gt;&gt; Departamento de Ci&#195;&#170;ncia da Computa&#195;&#167;&#195;&#163;o
</span><br>
<span class="quotelev2">&gt;&gt; DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Grupo de Usu&#195;&#161;rios GNU/Linux da UFRJ (GUL-UFRJ)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.dcc.ufrj.br/~gul">http://www.dcc.ufrj.br/~gul</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux User: #388711
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://counter.li.org/">http://counter.li.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Theory is when you know something, but it doesn't work. Practice is
</span><br>
<span class="quotelev2">&gt;&gt; when something works, but you don't know why.
</span><br>
<span class="quotelev2">&gt;&gt; Programmers combine theory and practice: Nothing works and they don't
</span><br>
<span class="quotelev2">&gt;&gt; know why.&quot; - Anon
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7109.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="7106.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7297.php">Robert Latham: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
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
