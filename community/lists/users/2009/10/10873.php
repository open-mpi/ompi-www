<?
$subject_val = "Re: [OMPI users] Making RPM from source that respects --prefix";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 09:01:08 2009" -->
<!-- isoreceived="20091002130108" -->
<!-- sent="Fri, 02 Oct 2009 14:59:44 +0200" -->
<!-- isosent="20091002125944" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Making RPM from source that respects --prefix" -->
<!-- id="1254488384.6542.9.camel_at_hp-laptop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="666203.88099.qm_at_web57605.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Making RPM from source that respects --prefix<br>
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 08:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10874.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>In reply to:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill,
<br>
<p>you might want to have a look here if you need a working example of
<br>
that:
<br>
<p><a href="https://savannah.fzk.de/cgi-bin/viewcvs.cgi/trunk/?root=openmpi-build">https://savannah.fzk.de/cgi-bin/viewcvs.cgi/trunk/?root=openmpi-build</a>
<br>
<p>We used to generate both SRPMs and RPMs for Open MPI in a previous
<br>
project and did in fact specify a separate installation directory :
<br>
(%define ompi_prefix  /opt/i2g/openmpi in i2g-openmpi.spec.in)
<br>
<p>Hope that helps.
<br>
<p><p>Regards,
<br>
Kiril
<br>
<p><p>On Fri, 2009-10-02 at 03:48 -0700, Bill Johnstone wrote:
<br>
<span class="quotelev1">&gt; I'm trying to build an RPM of 1.3.3 from the SRPM.  Despite typical RPM practice, I need to build ompi so that it installs to a different directory from /usr or /opt, i.e. what I would get if I just built from source myself with a --prefix argument to configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I invoke buildrpm with the --define 'configure_options --prefix=&lt;desired path&gt; ...', the options do get set when the building process gets kicked off.  However, when I query the final RPM, only vampirtrace has paid attention to the specified --prefix and wants to place its files accordingly.  How should I alter the .spec file (or in some other place?) to get the desired behavior for the final file locations in the RPM?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for any help.
</span><br>
<span class="quotelev1">&gt; 
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
<pre>
-- 
Dipl.-Inf. Kiril Dichev
Tel.: +49 711 685 60492
E-mail: dichev_at_[hidden]
High Performance Computing Center Stuttgart (HLRS)
Universit&#195;&#164;t Stuttgart
70550 Stuttgart
Germany
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10874.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>In reply to:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
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
