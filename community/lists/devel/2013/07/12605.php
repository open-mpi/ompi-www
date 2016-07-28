<?
$subject_val = "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 15 06:54:55 2013" -->
<!-- isoreceived="20130715105455" -->
<!-- sent="Mon, 15 Jul 2013 12:54:49 +0200" -->
<!-- isosent="20130715105449" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype" -->
<!-- id="297EDD8C-7FCC-4E8A-8C7B-342CC16B6D5E_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130715192936.0826c3efef7132d719767dc3_at_nifty.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-15 06:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12606.php">George Bosilca: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Previous message:</strong> <a href="12604.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12604.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for testing it. It is now in trunk r28790.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jul 15, 2013, at 12:29 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks. I've confirmed your patch.
</span><br>
<span class="quotelev1">&gt; I wrote a simple program to test your patch and no problems are found.
</span><br>
<span class="quotelev1">&gt; The test program is attached to this mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Takahiro,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please find below another patch, this time hopefully fixing all issues. The problem with my original patch and with yours was that they try to address the packing of the data representation without fixing the computation of the required length. As a result the length on the packer and unpacker differs and the unpacking of the subsequent data is done from a wrong location.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I changed the code to force the preparation of the packed data representation before returning the length the first time. This way we can compute exactly how many bytes we need, including the potential alignment requirements. As a result the amount on both sides (the packer and the unpacker) are now identical, and the entire process works flawlessly (or so I hope).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if you still notice issues with this patch. I'll push the tomorrow in the trunk, so it can soak for a few days before propagation to the branches.
</span><br>
<span class="quotelev1">&gt; &lt;put_dup_type_4.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12606.php">George Bosilca: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Previous message:</strong> <a href="12604.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12604.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
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
