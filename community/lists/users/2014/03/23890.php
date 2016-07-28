<?
$subject_val = "Re: [OMPI users] How to turn on the internal help messages of OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 00:02:29 2014" -->
<!-- isoreceived="20140319040229" -->
<!-- sent="Tue, 18 Mar 2014 21:01:03 -0700" -->
<!-- isosent="20140319040103" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to turn on the internal help messages of OpenMPI" -->
<!-- id="8CDAE746-B097-4885-A88E-24C874FC56E6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAF2GiUnhb3Fa+bajdE4UXh675eo2SEG9XrvnPZ9vy1Cu+YBQ1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to turn on the internal help messages of OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-19 00:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23889.php">Amin Hassani: "[OMPI users] How to turn on the internal help messages of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23889.php">Amin Hassani: "[OMPI users] How to turn on the internal help messages of OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have to configure --enable-debug to start. You then have to set an MCA param that corresponds to the output flag in the verbose statement - it's the second argument. If you are looking at a component, you can usually set the debug verbosity using the base framework param, e.g., &quot;-mca db_base_verbose N&quot;
<br>
<p><p>On Mar 18, 2014, at 8:21 PM, Amin Hassani &lt;ahassani4_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I turn on the internal logging options like  OPAL_OUTPUT_VERBOSE? is there any mca or configure flag I have to set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Amin ,
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23891.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23889.php">Amin Hassani: "[OMPI users] How to turn on the internal help messages of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23889.php">Amin Hassani: "[OMPI users] How to turn on the internal help messages of OpenMPI"</a>
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
