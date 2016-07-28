<?
$subject_val = "Re: [OMPI users] Bad performance when scattering big size of data?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 10:23:09 2010" -->
<!-- isoreceived="20101005142309" -->
<!-- sent="Tue, 5 Oct 2010 09:23:04 -0500" -->
<!-- isosent="20101005142304" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad performance when scattering big size of data?" -->
<!-- id="AANLkTimuQ-LxramT+9xf31OL7J_o=K4TKfgzKYqBOVVq_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CAA8AE3.4050501_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad performance when scattering big size of data?<br>
<strong>From:</strong> Storm Zhang (<em>stormzhg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 10:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>In reply to:</strong> <a href="14390.php">Eugene Loh: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I should say one more thing about the 500 procs test. I tried to run
<br>
two 500 procs at the same time using SGE and it runs fast and finishes at
<br>
the same time as the single run. So I think OpenMPI can handle them
<br>
separately very well.
<br>
<p>For the bind-to-core, I tried to run mpirun --help but not find the
<br>
bind-to-core info. I only see bynode or byslot options. Is it same as
<br>
bind-to-core? My mpirun shows version 1.3.3 but ompi_info shows 1.4.2.
<br>
<p>Thanks a lot.
<br>
<p>Linbao
<br>
<p><p>On Mon, Oct 4, 2010 at 9:18 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Storm Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is what I meant: the results of 500 procs in fact shows it with
</span><br>
<span class="quotelev2">&gt;&gt; 272-304(&lt;500) real cores, the program's running time is good, which is
</span><br>
<span class="quotelev2">&gt;&gt; almost five times 100 procs' time. So it can be handled very well. Therefore
</span><br>
<span class="quotelev2">&gt;&gt; I guess OpenMPI or Rocks OS does make use of hyperthreading to do the job.
</span><br>
<span class="quotelev2">&gt;&gt; But with 600 procs, the running time is more than double of that of 500
</span><br>
<span class="quotelev2">&gt;&gt; procs. I don't know why. This is my problem.
</span><br>
<span class="quotelev2">&gt;&gt; BTW, how to use -bind-to-core? I added it as mpirun's options. It always
</span><br>
<span class="quotelev2">&gt;&gt; gives me error &quot; the executable 'bind-to-core' can't be found. Isn't it
</span><br>
<span class="quotelev2">&gt;&gt; like:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include eth0 -np 600  -bind-to-core scatttest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for sending the mpirun run and error message.  That helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not recognizing the --bind-to-core option.  (Single hyphen, as you
</span><br>
<span class="quotelev1">&gt; had, should also be okay.)  Skimming through the e-mail, it looks like you
</span><br>
<span class="quotelev1">&gt; are using OMPI 1.3.2 and 1.4.2.  Did you try --bind-to-core with both?  If I
</span><br>
<span class="quotelev1">&gt; remember my version numbers, --bind-to-core will not be recognized with
</span><br>
<span class="quotelev1">&gt; 1.3.2, but should be with 1.4.2.  Could it be that you only tried 1.3.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another option is to try &quot;mpirun --help&quot;.  Make sure that it reports
</span><br>
<span class="quotelev1">&gt; --bind-to-core.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>In reply to:</strong> <a href="14390.php">Eugene Loh: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14394.php">Terry Dontje: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
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
