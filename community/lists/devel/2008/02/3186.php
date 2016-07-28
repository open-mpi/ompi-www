<?
$subject_val = "Re: [OMPI devel] New Driver BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 19:34:01 2008" -->
<!-- isoreceived="20080212003401" -->
<!-- sent="Mon, 11 Feb 2008 19:33:48 -0500" -->
<!-- isosent="20080212003348" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New Driver BTL" -->
<!-- id="5D1FB65A-99DC-436C-8A4A-44FE5280FDE7_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080211195218.3nr99zju648wc0o4_at_etumail.u-bordeaux1.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New Driver BTL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 19:33:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3187.php">Brad Benton: "[OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3185.php">Greg Watson: "[OMPI devel] Leopard problems"</a>
<li><strong>In reply to:</strong> <a href="3182.php">Cedric Desmoulin: "[OMPI devel] New Driver BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>Reply:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cedric,
<br>
<p>There is not much documentation about this subject. However, we have  
<br>
some templates. Look in ompi/mca/btl/template to see how a new driver  
<br>
is supposed to be written.
<br>
<p>I have a question. As far as I understand about New Madelaine it  
<br>
already support multi devices, so I guess the matching is done  
<br>
internally. Then the best approach for Open MPI will be to create an  
<br>
MTL instead of a BTL. The MTL interface is much simpler, basically a  
<br>
one to one wrapper for the point-to-point MPI functions. However, if  
<br>
you take this approach, there are few things that will be left out. As  
<br>
an example, no data resilience, no stripping, no pipelining. But if  
<br>
you do all this internally in NewMadeleine, I guess you don't need the  
<br>
Open MPI PML support.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 11, 2008, at 1:52 PM, Cedric Desmoulin wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if it is the good method to have some help for developing
</span><br>
<span class="quotelev1">&gt; with open mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are 4 french students and we have a project : we have to write a
</span><br>
<span class="quotelev1">&gt; new driver (new btl) between openmpi and newmadeleine (see the web
</span><br>
<span class="quotelev1">&gt; page, <a href="http://pm2.gforge.inria.fr/newmadeleine/doc/html/">http://pm2.gforge.inria.fr/newmadeleine/doc/html/</a>) With newmad,
</span><br>
<span class="quotelev1">&gt; we use send receive interface. we need just the part of btl which is
</span><br>
<span class="quotelev1">&gt; able to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you some docs about structure like mca_btl_base_module and its
</span><br>
<span class="quotelev1">&gt; friends ? I don't find where the function mca_btl_tcp_send is used. Do
</span><br>
<span class="quotelev1">&gt; you know it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PLEASE HELP US!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Team
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3186/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3187.php">Brad Benton: "[OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3185.php">Greg Watson: "[OMPI devel] Leopard problems"</a>
<li><strong>In reply to:</strong> <a href="3182.php">Cedric Desmoulin: "[OMPI devel] New Driver BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>Reply:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
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
