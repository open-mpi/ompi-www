<?
$subject_val = "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 23:21:07 2010" -->
<!-- isoreceived="20100318032107" -->
<!-- sent="Wed, 17 Mar 2010 20:20:38 -0700" -->
<!-- isosent="20100318032038" -->
<!-- name="Vedran Coralic" -->
<!-- email="vcoralic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1" -->
<!-- id="48b85f861003172020i4e1d8d73rfb607d338327e71c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BA0D6FC.6080809_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1<br>
<strong>From:</strong> Vedran Coralic (<em>vcoralic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 23:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Previous message:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the advice =)
<br>
<p>2010/3/17 Tim Prince &lt;n8tm_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On 3/16/2010 11:22 PM, Vedran Coralic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, I think I know what the problem is. Basically, the NAG Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compiler and its libraries are only available on the master node so that the
</span><br>
<span class="quotelev2">&gt;&gt; remaining nodes cannot access/find the required files. From my
</span><br>
<span class="quotelev2">&gt;&gt; understanding, the only way to fix this would be put to copy the NAG Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compiler to all of the nodes in the cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Don't NAG provide static copies of their libraries?
</span><br>
<span class="quotelev1">&gt; Yes, if you link the dynamic libraries, you must make them visible on each
</span><br>
<span class="quotelev1">&gt; node, with the path set in LD_LIBRARY_PATH.  On such a small cluster, (or
</span><br>
<span class="quotelev1">&gt; with a fast shared file system), a usual way is to put them in a directory
</span><br>
<span class="quotelev1">&gt; mounted across all nodes.
</span><br>
<span class="quotelev1">&gt; Since you talk about a &quot;work-around,&quot; you can copy the library folder to
</span><br>
<span class="quotelev1">&gt; your own file system for each node, to check that you've got the hang of it.
</span><br>
<span class="quotelev1">&gt; The LD_LIBRARY_PATH setting can be done in your user settings so it doesn't
</span><br>
<span class="quotelev1">&gt; affect anyone else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Vedran Coralic
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Previous message:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
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
