<?
$subject_val = "[OMPI users] SGE problems w/OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 17:19:51 2015" -->
<!-- isoreceived="20150730211951" -->
<!-- sent="Thu, 30 Jul 2015 21:19:41 +0000" -->
<!-- isosent="20150730211941" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] SGE problems w/OpenMPI 1.8.7" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EEEB7C_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] SGE problems w/OpenMPI 1.8.7<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 17:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27362.php">Nathan Hjelm: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running a mixed cluster of Blades (HS21 and HS22 chassis), x3550-M3 and X3550-M4 systems, some of which support hyperthreading, while others
<br>
don't (specifically the HS21 blades) all on CentOS 6.3 w/SGE.
<br>
<p>I have no problems running my simple OpenMPI 1.8.7 test code outside of SGE (with or without the --bind-to core switch, but can only run the jobs within
<br>
SGE via qrsh on a limited number of slots (4 at most) successfully. The errors are very similar to the ones I was getting running OpenMPI 1.8.5 - 1.8.6 outside of SGE
<br>
on this same cluster.
<br>
<p>Strangely, when running the test code outside of SGE w/the --bind-to core switch, mpirun still binds processes to hyperthreading cores. Additionally,
<br>
the --bind-to core switch prevents the OpenMPI 1.8.7 test code from running at all within SGE (it outputs warnings about missing NUMA libraries reducing performance
<br>
then exits).
<br>
<p>We would rather run out OpenMPI jobs from within SGE so that we can get accounting data on OpenMPI jobs for administrative purposes.
<br>
<p>The orte PE I'm been using seems to meet all the requirements for previous versions of OpenMPI:
<br>
the allocation rule is fill-up, rather than round-robin (I'm not sure if this makes a difference or not)
<br>
<p>The value NONE in user_lists and xuser_lists mean enable everybody and exclude nobody.
<br>
<p>The value of control_slaves must be TRUE; otherwise, qrsh exits with an error message.
<br>
<p>The value of job_is_first_task must be FALSE or the job launcher consumes a slot. In other words, mpirun itself will count as one of the slots and the job will fail, because only n-1 processes will start.
<br>
<p>And be sure the queue will make use of the PE that you specified
<br>
<p>Below is the command line I've been using to generate the errors found in the attached file out.txt:
<br>
<p>qrsh -V -now yes -pe orte 186 mpirun -np 186 --prefix /hpc/apps/mpi/openmpi/1.8.7/ --mca btl_tcp_if_include eth0 --mca pls_gridengine_verbose 1 /hpc/home/lanew/mpi/openmpi/ProcessColors3 &gt;&gt; out.txt 2&gt;&amp;1
<br>
<p>Sorry for the length. Thanks in advance for any help in resolving this nagging issue (I wish we had a homogenous cluster now).
<br>
<p>-Bill L.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27363/out.txt">out.txt</a>
</ul>
<!-- attachment="out.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27362.php">Nathan Hjelm: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
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
