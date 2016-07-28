<?
$subject_val = "Re: [OMPI devel] openmpi installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 11:43:31 2014" -->
<!-- isoreceived="20140207164331" -->
<!-- sent="Fri, 7 Feb 2014 08:42:13 -0800" -->
<!-- isosent="20140207164213" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi installation" -->
<!-- id="B9F4161F-E184-4C1D-AAB9-C5155095CA10_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGCe5YqTEH-pvu7CMNP2Kzg75+o=AfGnyqe5zb+fnhCkjzzYSg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi installation<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 11:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Previous message:</strong> <a href="14028.php">Talla: "[OMPI devel] openmpi installation"</a>
<li><strong>In reply to:</strong> <a href="14028.php">Talla: "[OMPI devel] openmpi installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Reply:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it certainly looks okay - try doing &quot;ls&quot; in your prefix directory. Do you see the bin and lib directories there? Anything in them?
<br>
<p>On Feb 7, 2014, at 8:37 AM, Talla &lt;jtalla_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello sir
</span><br>
<span class="quotelev1">&gt; I downloaded openmpi 1.7 and followed the installation instructions:
</span><br>
<span class="quotelev1">&gt; cd openmpi
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&quot;/home/$USER/.openmpi&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev1">&gt; echo export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No error messages appear, accept &quot;nothing to do with all-em&quot;. However when I run mpicc or mpirun it says no command. So I am not sure if the mpi installed correctly in my red hat server or not. I don't know what I am missing so I would really appreciate it if you help me as I am struggling with this for a while. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you in advance. Talla
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ######################
</span><br>
<span class="quotelev1">&gt; Dr. Jamal A Talla
</span><br>
<span class="quotelev1">&gt; Assistant professor
</span><br>
<span class="quotelev1">&gt; Department of Physics, Rm 2139
</span><br>
<span class="quotelev1">&gt; College of Science,09 
</span><br>
<span class="quotelev1">&gt; King Faisal University
</span><br>
<span class="quotelev1">&gt; P.O. Box 380, Al-Ahsaa - 31982
</span><br>
<span class="quotelev1">&gt; City Code: HOF
</span><br>
<span class="quotelev1">&gt; Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; Cell Phone: +966564542399
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Previous message:</strong> <a href="14028.php">Talla: "[OMPI devel] openmpi installation"</a>
<li><strong>In reply to:</strong> <a href="14028.php">Talla: "[OMPI devel] openmpi installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Reply:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
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
