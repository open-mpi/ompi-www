<?
$subject_val = "Re: [OMPI devel] openmpi installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 12:04:19 2014" -->
<!-- isoreceived="20140207170419" -->
<!-- sent="Fri, 7 Feb 2014 09:03:01 -0800" -->
<!-- isosent="20140207170301" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi installation" -->
<!-- id="9DBF559F-7966-4D2B-A405-B4FBAC8231C9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGCe5YqD7ELv=zYyDhZZpYuFXs05=uKZYQ28F9rVPTQ7j8MxRQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-02-07 12:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14032.php">Shamis, Pavel: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>In reply to:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the directories are there and populated, then the problem is likely with your path. Do this:
<br>
<p>1. &quot;which mpirun&quot; - if you don't see your &lt;prefix&gt;/bin, then you know your path is wrong
<br>
<p>2. &quot;printenv PATH&quot; - is it what you expected?
<br>
<p>We generally suggest that you put your &lt;prefix&gt;/bin and &lt;prefix&gt;/lib at the beginning of their respective envars as most OS distributions come with their own versions, and you want to be sure and pickup your installed version first.
<br>
<p><p>On Feb 7, 2014, at 8:54 AM, Talla &lt;jtalla_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for considering my case seriously. 
</span><br>
<span class="quotelev1">&gt; yes sir both directories along with other directories are there with files in them. But still I feel I am missing something not sure what it is. how I can check Open Mpi? mpirun is not responding not even mpicc ? any instruction how to run parallel jobs , examples with instruction any help is highly appreciated.
</span><br>
<span class="quotelev1">&gt; Regards. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 7, 2014 at 7:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Well, it certainly looks okay - try doing &quot;ls&quot; in your prefix directory. Do you see the bin and lib directories there? Anything in them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2014, at 8:37 AM, Talla &lt;jtalla_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello sir
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded openmpi 1.7 and followed the installation instructions:
</span><br>
<span class="quotelev2">&gt;&gt; cd openmpi
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=&quot;/home/$USER/.openmpi&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot;
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; echo export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev2">&gt;&gt; echo export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No error messages appear, accept &quot;nothing to do with all-em&quot;. However when I run mpicc or mpirun it says no command. So I am not sure if the mpi installed correctly in my red hat server or not. I don't know what I am missing so I would really appreciate it if you help me as I am struggling with this for a while. 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance. Talla
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ######################
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Jamal A Talla
</span><br>
<span class="quotelev2">&gt;&gt; Assistant professor
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics, Rm 2139
</span><br>
<span class="quotelev2">&gt;&gt; College of Science,09 
</span><br>
<span class="quotelev2">&gt;&gt; King Faisal University
</span><br>
<span class="quotelev2">&gt;&gt; P.O. Box 380, Al-Ahsaa - 31982
</span><br>
<span class="quotelev2">&gt;&gt; City Code: HOF
</span><br>
<span class="quotelev2">&gt;&gt; Kingdom of Saudi Arabia
</span><br>
<span class="quotelev2">&gt;&gt; Cell Phone: +966564542399
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14032.php">Shamis, Pavel: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>In reply to:</strong> <a href="14030.php">Talla: "Re: [OMPI devel] openmpi installation"</a>
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
