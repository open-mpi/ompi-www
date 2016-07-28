<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 10:40:03 2009" -->
<!-- isoreceived="20090507144003" -->
<!-- sent="Thu, 7 May 2009 16:39:57 +0200" -->
<!-- isosent="20090507143957" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="e76aa17f0905070739x45a7a82x6cb4d70c197c27ed_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="531893A968B34D40B36C7A6445BC828A025C581F_at_catoexm06.noam.corp.platform.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 10:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9259.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>In reply to:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thank you for the tip, this seems to be what I was looking for.
<br>
<p>Matthieu
<br>
<p>2009/5/7 Mehdi Bozzo-Rey &lt;mbozzore_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hello Jeroen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are 2 ways of launching OpenMPI jobs (using a recent version of LSF):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.&#160;&#160;&#160;&#160;&#160;&#160; The one you have just described; it uses the generic PJL (Parallel
</span><br>
<span class="quotelev1">&gt; Job Launcher) framework. You can easily recognise it because of the use of
</span><br>
<span class="quotelev1">&gt; the &#150;a openmpi flag and mpirun.lsf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.&#160;&#160;&#160;&#160;&#160;&#160; In recent versions of LSF, another framework is also available, and
</span><br>
<span class="quotelev1">&gt; it permits a tight (native) integration with the MPIs (this is why there is
</span><br>
<span class="quotelev1">&gt; the OpenMPI integration)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, for 1., a typical command line would be, as you mentioned, something
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -o %J.out -e %J.err -n 4 -R &quot;span[ptile=1]&quot; -a openmpi mpirun.lsf
</span><br>
<span class="quotelev1">&gt; ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And for 2., you would use something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -o %J.out -e %J.err -n 4 -R &quot;span[ptile=1]&quot; mpirun ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mehdi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeroen Kleijer
</span><br>
<span class="quotelev1">&gt; Sent: May-05-09 9:26 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] LSF launch with OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you wish to submit to lsf using its native commands (bsub) you can do the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -q ${QUEUE} -a openmpi -n ${CPUS}&#160;&quot;mpirun.lsf&#160; -x PATH -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH -x MPI_BUFFER_SIZE ${COMMAND} ${OPTIONS}&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be noted that in this case you don't call OpenMPI's mpirun
</span><br>
<span class="quotelev1">&gt; directly but use the mpirun.lsf, a wrapper script provided by LSF. This
</span><br>
<span class="quotelev1">&gt; wrapper script takes care of setting the necessary environment variables and
</span><br>
<span class="quotelev1">&gt; eventually calls the correct mpirun. (the option &quot;-a openmpi&quot; tells LSF that
</span><br>
<span class="quotelev1">&gt; we're using OpenMPI so don't try to autodetect)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeroen Kleijer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 5, 2009 at 2:23 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2009, at 6:10 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first is what the support of LSF by OpenMPI means. When mpirun is
</span><br>
<span class="quotelev1">&gt; executed, it is an LSF job that is actually ran? Or what does it
</span><br>
<span class="quotelev1">&gt; imply? I've tried to search on the openmpi website as well as on the
</span><br>
<span class="quotelev1">&gt; internet, but I couldn't find a clear answer/use case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What Terry said is correct. &#160;It means that &quot;mpirun&quot; will use, under the
</span><br>
<span class="quotelev1">&gt; covers, the &quot;native&quot; launching mechanism of LSF to launch jobs (vs., say,
</span><br>
<span class="quotelev1">&gt; rsh or ssh). &#160;It'll also discover the hosts to use for this job without the
</span><br>
<span class="quotelev1">&gt; use of a hostfile -- it'll query LSF directly to see what hosts it should
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My second question is about the LSF detection. lsf.h is detected, but
</span><br>
<span class="quotelev1">&gt; when lsb_launch is searched for ion libbat.so, it fails because
</span><br>
<span class="quotelev1">&gt; parse_time and parse_time_ex are not found. Is there a way to add
</span><br>
<span class="quotelev1">&gt; additional lsf libraries so that the search can be done?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the data shown here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Website: <a href="http://matthieu-brucher.developpez.com/">http://matthieu-brucher.developpez.com/</a>
Blogs: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a> and <a href="http://blog.developpez.com/?blog=92">http://blog.developpez.com/?blog=92</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9259.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>In reply to:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
