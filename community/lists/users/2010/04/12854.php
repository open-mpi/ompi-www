<?
$subject_val = "Re: [OMPI users] openmpi 1.4.1 and xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 15:22:45 2010" -->
<!-- isoreceived="20100430192245" -->
<!-- sent="Fri, 30 Apr 2010 12:22:39 -0700" -->
<!-- isosent="20100430192239" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4.1 and xgrid" -->
<!-- id="029B0201-E8C0-482A-A1AE-70F9E43A987C_at_cox.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="i2zcf58c8d01004301214x5bc3b0ak613b0d66e95a843e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.4.1 and xgrid<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 15:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12855.php">Cristobal Navarro: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12853.php">Alan: "[OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="12853.php">Alan: "[OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12855.php">Cristobal Navarro: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12855.php">Cristobal Navarro: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alan,
<br>
<p>Are you sure that the ompi_info and mpirun that you are using are the  
<br>
1.4.1 versions and not the apple supplied versions. I use modules to  
<br>
help ensure that I am using the openmpi that I built and not the apple  
<br>
supplied versions.
<br>
<p>Doug Reeder
<br>
On Apr 30, 2010, at 12:14 PM, Alan wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No matter I do I cannot disable xgrid while compiling opempi. I tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --without-xgrid --enable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And still see with ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MCA plm: xgrid (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And because of xgrid on ompi, I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.1/examples% mpirun -c 2 hello_c
</span><br>
<span class="quotelev1">&gt; [amadeus.local:26559] [[63998,0],0] ORTE_ERROR_LOG: Unknown error: 1  
</span><br>
<span class="quotelev1">&gt; in file src/plm_xgrid_module.m at line 119
</span><br>
<span class="quotelev1">&gt; [amadeus.local:26559] [[63998,0],0] ORTE_ERROR_LOG: Unknown error: 1  
</span><br>
<span class="quotelev1">&gt; in file src/plm_xgrid_module.m at line 15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using mac SL 10.6.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling 1.3.3 and haven't any problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Alan Wilter S. da Silva, D.Sc. - CCPN Research Associate
</span><br>
<span class="quotelev1">&gt; Department of Biochemistry, University of Cambridge.
</span><br>
<span class="quotelev1">&gt; 80 Tennis Court Road, Cambridge CB2 1GA, UK.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.bio.cam.ac.uk/~awd28">http://www.bio.cam.ac.uk/~awd28</a>&lt;&lt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12855.php">Cristobal Navarro: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12853.php">Alan: "[OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="12853.php">Alan: "[OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12855.php">Cristobal Navarro: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12855.php">Cristobal Navarro: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
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
