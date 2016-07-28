<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 09:51:33 2009" -->
<!-- isoreceived="20090507135133" -->
<!-- sent="Thu, 7 May 2009 09:50:42 -0400" -->
<!-- isosent="20090507135042" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="531893A968B34D40B36C7A6445BC828A025C581F_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dad39cd60905050625t5bd7e4e6t5e256d10feaad867_at_mail.gmail.com" -->
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
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 09:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9258.php">Pavel Shamis (Pasha): "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9260.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9260.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeroen,
<br>
<p>&nbsp;
<br>
<p>There are 2 ways of launching OpenMPI jobs (using a recent version of
<br>
LSF):
<br>
<p>1.       The one you have just described; it uses the generic PJL
<br>
(Parallel Job Launcher) framework. You can easily recognise it because
<br>
of the use of the -a openmpi flag and mpirun.lsf
<br>
<p>2.       In recent versions of LSF, another framework is also available,
<br>
and it permits a tight (native) integration with the MPIs (this is why
<br>
there is the OpenMPI integration) 
<br>
<p>&nbsp;
<br>
<p>So, for 1., a typical command line would be, as you mentioned, something
<br>
like:
<br>
<p>&nbsp;
<br>
<p>bsub -o %J.out -e %J.err -n 4 -R &quot;span[ptile=1]&quot; -a openmpi mpirun.lsf
<br>
./test
<br>
<p>&nbsp;
<br>
<p>And for 2., you would use something like:
<br>
<p>&nbsp;
<br>
<p>bsub -o %J.out -e %J.err -n 4 -R &quot;span[ptile=1]&quot; mpirun ./test
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>&nbsp;
<br>
<p>Mehdi
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeroen Kleijer
<br>
Sent: May-05-09 9:26 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] LSF launch with OpenMPI
<br>
<p>&nbsp;
<br>
<p>If you wish to submit to lsf using its native commands (bsub) you can do
<br>
the following:
<br>
<p>&nbsp;
<br>
<p>bsub -q ${QUEUE} -a openmpi -n ${CPUS} &quot;mpirun.lsf  -x PATH -x
<br>
LD_LIBRARY_PATH -x MPI_BUFFER_SIZE ${COMMAND} ${OPTIONS}&quot;
<br>
<p>&nbsp;
<br>
<p>It should be noted that in this case you don't call OpenMPI's mpirun
<br>
directly but use the mpirun.lsf, a wrapper script provided by LSF. This
<br>
wrapper script takes care of setting the necessary environment variables
<br>
and eventually calls the correct mpirun. (the option &quot;-a openmpi&quot; tells
<br>
LSF that we're using OpenMPI so don't try to autodetect)
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>&nbsp;
<br>
<p>Jeroen Kleijer
<br>
<p>On Tue, May 5, 2009 at 2:23 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>On May 5, 2009, at 6:10 AM, Matthieu Brucher wrote:
<br>
<p>The first is what the support of LSF by OpenMPI means. When mpirun is
<br>
executed, it is an LSF job that is actually ran? Or what does it
<br>
imply? I've tried to search on the openmpi website as well as on the
<br>
internet, but I couldn't find a clear answer/use case.
<br>
<p>&nbsp;
<br>
<p>What Terry said is correct.  It means that &quot;mpirun&quot; will use, under the
<br>
covers, the &quot;native&quot; launching mechanism of LSF to launch jobs (vs.,
<br>
say, rsh or ssh).  It'll also discover the hosts to use for this job
<br>
without the use of a hostfile -- it'll query LSF directly to see what
<br>
hosts it should use.
<br>
<p>My second question is about the LSF detection. lsf.h is detected, but
<br>
when lsb_launch is searched for ion libbat.so, it fails because
<br>
parse_time and parse_time_ex are not found. Is there a way to add
<br>
additional lsf libraries so that the search can be done?
<br>
<p><p><p>Can you send all the data shown here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9258.php">Pavel Shamis (Pasha): "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9260.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9260.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
