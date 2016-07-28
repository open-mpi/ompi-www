<?
$subject_val = "Re: [OMPI users] openmpi 1.4.1 and xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 18:29:19 2010" -->
<!-- isoreceived="20100430222919" -->
<!-- sent="Fri, 30 Apr 2010 18:28:54 -0400" -->
<!-- isosent="20100430222854" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4.1 and xgrid" -->
<!-- id="z2rb66245471004301528kd11c1bfbs49ad15c71d08b30b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A6248039-8EE9-4C6C-AEA8-ED57171A59EE_at_cox.net" -->
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
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 18:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12859.php">Dropbox: "[OMPI users] Cristobal Navarro has invited you to Dropbox"</a>
<li><strong>Previous message:</strong> <a href="12857.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="12857.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12860.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12860.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this is strange, because some weeks ago i compiled openmpi 1.4.1 on a mac
<br>
10.5.6
<br>
and the parameter --without-xgrid worked good.
<br>
<p>can you turn off xgrid on the macs you are working with?? that might help
<br>
<p><p>Cristobal
<br>
<p><p><p><p>On Fri, Apr 30, 2010 at 6:19 PM, Doug Reeder &lt;dlr1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Alan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't tried to build 1.4.x on os x 10.6.x yet, but it sounds like the
</span><br>
<span class="quotelev1">&gt; configure script has become too clever by half. Is there a configure
</span><br>
<span class="quotelev1">&gt; argument to force no xgrid (e.g., --with-xgrid=no or --enable-xgrid=no).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 30, 2010, at 3:12 PM, Alan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi guys, thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I can assure there I have the right things as explained here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi 1.2.8 (apple)
</span><br>
<span class="quotelev1">&gt; /usr/bin/ompi_info | grep xgrid
</span><br>
<span class="quotelev1">&gt;                  MCA ras: xgrid (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: xgrid (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi 1.3.3 (Fink)
</span><br>
<span class="quotelev1">&gt; /sw/bin/ompi_info | grep xgrid
</span><br>
<span class="quotelev1">&gt; &quot;nothing&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi 1.4.1 (mine, for Amber11)
</span><br>
<span class="quotelev1">&gt; /Users/alan/Programmes/amber11/exe/ompi_info | grep xgrid
</span><br>
<span class="quotelev1">&gt;                   MCA plm: xgrid (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, my problem is &quot;simple&quot;, the formula I used to compile ompi without
</span><br>
<span class="quotelev1">&gt; xgrid used to work, but it's simply not working anymore with ompi 1.4.1,
</span><br>
<span class="quotelev1">&gt; even though I see in compilation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component plm:xgrid (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component plm:xgrid compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if C and Objective C are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking for XgridFoundation Framework... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: XGrid components must be built as DSOs.  Disabling
</span><br>
<span class="quotelev1">&gt; checking if MCA component plm:xgrid can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 30, 2010 at 20:32, Cristobal Navarro &lt;axischire_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; try launching mpirun -v a see what version is picking up.
</span><br>
<span class="quotelev2">&gt;&gt; maybe its the included 1.2.x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 30, 2010 at 3:22 PM, Doug Reeder &lt;dlr1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you sure that the ompi_info and mpirun that you are using are the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.1 versions and not the apple supplied versions. I use modules to help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ensure that I am using the openmpi that I built and not the apple supplied
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 30, 2010, at 12:14 PM, Alan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  No matter I do I cannot disable xgrid while compiling opempi. I tried:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-xgrid --enable-shared --enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And still see with ompi_info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MCA plm: xgrid (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And because of xgrid on ompi, I have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.4.1/examples% mpirun -c 2 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [amadeus.local:26559] [[63998,0],0] ORTE_ERROR_LOG: Unknown error: 1 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file src/plm_xgrid_module.m at line 119
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [amadeus.local:26559] [[63998,0],0] ORTE_ERROR_LOG: Unknown error: 1 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file src/plm_xgrid_module.m at line 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using mac SL 10.6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compiling 1.3.3 and haven't any problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alan Wilter S. da Silva, D.Sc. - CCPN Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Biochemistry, University of Cambridge.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 80 Tennis Court Road, Cambridge CB2 1GA, UK.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;<a href="http://www.bio.cam.ac.uk/~awd28">http://www.bio.cam.ac.uk/~awd28</a> &lt;<a href="http://www.bio.cam.ac.uk/%7Eawd28">http://www.bio.cam.ac.uk/%7Eawd28</a>&gt;&lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; Alan Wilter S. da Silva, D.Sc. - CCPN Research Associate
</span><br>
<span class="quotelev1">&gt; Department of Biochemistry, University of Cambridge.
</span><br>
<span class="quotelev1">&gt; 80 Tennis Court Road, Cambridge CB2 1GA, UK.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.bio.cam.ac.uk/~awd28">http://www.bio.cam.ac.uk/~awd28</a> &lt;<a href="http://www.bio.cam.ac.uk/%7Eawd28">http://www.bio.cam.ac.uk/%7Eawd28</a>&gt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12859.php">Dropbox: "[OMPI users] Cristobal Navarro has invited you to Dropbox"</a>
<li><strong>Previous message:</strong> <a href="12857.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="12857.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12860.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12860.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
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
