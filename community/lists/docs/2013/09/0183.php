<?
$subject_val = "Re: [OMPI docs] Jump starting the Open MPI documentation project";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 12:29:17 2013" -->
<!-- isoreceived="20130918162917" -->
<!-- sent="Wed, 18 Sep 2013 09:29:12 -0700" -->
<!-- isosent="20130918162912" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Jump starting the Open MPI documentation project" -->
<!-- id="4067C93A-D927-43FC-B718-7175C1FB82A1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC2Zy4MA7UtY+GQeZVt4c8oK7JZodnEJiOsJm2ZhhLudCxQhiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Jump starting the Open MPI documentation project<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 12:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Kelly Black: "[OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>In reply to:</strong> <a href="0182.php">Kelly Black: "[OMPI docs] Jump starting the Open MPI documentation project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>Reply:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume you are documenting how to run MPI programs based on OMPI as opposed to how to develop code inside of OMPI?
<br>
<p>The attached looks like you are targeting the former. There are many good books on MPI programming that explain in depth how to write and execute MPI programs, so I wouldn't bother explaining things like MPI_Init.
<br>
<p>I would instead focus on providing details on all the OMPI options, which go beyond basic MPI programming and can be confusing to users. You'd have to present a breakdown of how OMPI is structured as a way of introducing the MCA param naming scheme, and then discuss what those params actually do, when to use them, etc.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Sep 17, 2013, at 2:59 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have briefly spoken with Jeff Squyres and Joshua Hersey about the Open MPI documentation project. Based on feedback from them a rough draft of an outline has been created.  Open MPI is a great resource, and it can benefit from a central resource that describes how to use it. There is a lot of information out there, but it can be difficult to find. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will attach a copy of the current document here. It is quite rough, and the important thing at this point is the outline that can be found at the beginning of the document. In terms of the big picture the opening chapter should contain a broad overview but should also offer a quick start guide that gives a basic introduction on how to compile and run a program as well as perform some very basic tasks. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The thinking on the other chapters is that they will be more focused and provide documentation that  ranges from basic, intermediate and advanced usage of the Open MPI library. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The files are written in LaTeX, and they can be found at <a href="https://github.com/open-mpi/docs">https://github.com/open-mpi/docs</a> The document that is attached here was made from the development branch. At this point there is not much in the master branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, the document is rough and needs more thought. Insights and ideas at this point are welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; kel
</span><br>
<span class="quotelev1">&gt; _______________________________________________________
</span><br>
<span class="quotelev1">&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev1">&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev1">&gt; Department of Math. &amp; C.S.      
</span><br>
<span class="quotelev1">&gt; PO Box 5815
</span><br>
<span class="quotelev1">&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev1">&gt; USA
</span><br>
<span class="quotelev1">&gt; &lt;OpenMPIUserManual.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Kelly Black: "[OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>In reply to:</strong> <a href="0182.php">Kelly Black: "[OMPI docs] Jump starting the Open MPI documentation project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>Reply:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
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
