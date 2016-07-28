<?
$subject_val = "Re: [OMPI users] Bad performance when scattering big size of data?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 11:07:57 2010" -->
<!-- isoreceived="20101005150757" -->
<!-- sent="Tue, 05 Oct 2010 11:06:36 -0400" -->
<!-- isosent="20101005150636" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad performance when scattering big size of data?" -->
<!-- id="4CAB3EFC.8060104_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimuQ-LxramT+9xf31OL7J_o=K4TKfgzKYqBOVVq_at_mail.gmail.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 11:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Previous message:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 10/05/2010 10:23 AM, Storm Zhang wrote:
<br>
<span class="quotelev1">&gt; Sorry, I should say one more thing about the 500 procs test. I tried 
</span><br>
<span class="quotelev1">&gt; to run two 500 procs at the same time using SGE and it runs fast and 
</span><br>
<span class="quotelev1">&gt; finishes at the same time as the single run. So I think OpenMPI can 
</span><br>
<span class="quotelev1">&gt; handle them separately very well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the bind-to-core, I tried to run mpirun --help but not find the 
</span><br>
<span class="quotelev1">&gt; bind-to-core info. I only see bynode or byslot options. Is it same as 
</span><br>
<span class="quotelev1">&gt; bind-to-core? My mpirun shows version 1.3.3 but ompi_info shows 1.4.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
No, -bynode/-byslot is for mapping not binding.  I cannot explain the 
<br>
different release versions of ompi_info and mpirun.  Have you done a 
<br>
which to see where each of them are located.  Anyways, 1.3.3 does not 
<br>
have any of the -bind-to-* options.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linbao
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 4, 2010 at 9:18 PM, Eugene Loh &lt;eugene.loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:eugene.loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Storm Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Here is what I meant: the results of 500 procs in fact shows
</span><br>
<span class="quotelev1">&gt;         it with 272-304(&lt;500) real cores, the program's running time
</span><br>
<span class="quotelev1">&gt;         is good, which is almost five times 100 procs' time. So it can
</span><br>
<span class="quotelev1">&gt;         be handled very well. Therefore I guess OpenMPI or Rocks OS
</span><br>
<span class="quotelev1">&gt;         does make use of hyperthreading to do the job. But with 600
</span><br>
<span class="quotelev1">&gt;         procs, the running time is more than double of that of 500
</span><br>
<span class="quotelev1">&gt;         procs. I don't know why. This is my problem.
</span><br>
<span class="quotelev1">&gt;         BTW, how to use -bind-to-core? I added it as mpirun's options.
</span><br>
<span class="quotelev1">&gt;         It always gives me error &quot; the executable 'bind-to-core' can't
</span><br>
<span class="quotelev1">&gt;         be found. Isn't it like:
</span><br>
<span class="quotelev1">&gt;         mpirun --mca btl_tcp_if_include eth0 -np 600  -bind-to-core
</span><br>
<span class="quotelev1">&gt;         scatttest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks for sending the mpirun run and error message.  That helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's not recognizing the --bind-to-core option.  (Single hyphen,
</span><br>
<span class="quotelev1">&gt;     as you had, should also be okay.)  Skimming through the e-mail, it
</span><br>
<span class="quotelev1">&gt;     looks like you are using OMPI 1.3.2 and 1.4.2.  Did you try
</span><br>
<span class="quotelev1">&gt;     --bind-to-core with both?  If I remember my version numbers,
</span><br>
<span class="quotelev1">&gt;     --bind-to-core will not be recognized with 1.3.2, but should be
</span><br>
<span class="quotelev1">&gt;     with 1.4.2.  Could it be that you only tried 1.3.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Another option is to try &quot;mpirun --help&quot;.  Make sure that it
</span><br>
<span class="quotelev1">&gt;     reports --bind-to-core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14394/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Previous message:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
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
