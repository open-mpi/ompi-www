<?
$subject_val = "Re: [OMPI users] OpenMPI providing rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  1 01:15:46 2010" -->
<!-- isoreceived="20100801051546" -->
<!-- sent="Sat, 31 Jul 2010 22:17:34 -0700" -->
<!-- isosent="20100801051734" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI providing rank?" -->
<!-- id="4C55036E.1040408_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201007281511.29517.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI providing rank?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-01 01:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13886.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13884.php">Eugene Loh: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13886.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13886.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13914.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Yves Caniou wrote:
<blockquote cite="mid201007281511.29517.yves.caniou@ens-lyon.fr"
 type="cite">
  <pre wrap="">Le Wednesday 28 July 2010 15:05:28, vous avez &eacute;crit&nbsp;:
  </pre>
  <blockquote type="cite">
    <pre wrap="">I am confused. I thought all you wanted to do is report out the binding of
the process - yes? Are you trying to set the affinity bindings yourself?

If the latter, then your script doesn't do anything that mpirun wouldn't
do, and doesn't do it as well. You would be far better off just adding
--bind-to-core to the mpirun cmd line.
    </pre>
  </blockquote>
  <pre wrap=""><!---->"mpirun -h" says that it is the default, so there is not even something to do?
I don't even have to add "--mca mpi_paffinity_alone 1" ?
  </pre>
</blockquote>
Wow.&nbsp; I just tried "mpirun -h" and, yes, it claims that
"--bind-to-core" is the default.&nbsp; I believe this is wrong... or at
least "misleading."&nbsp; :^)&nbsp; You should specify --bind-to-core
explicitly.&nbsp; It is the successor to paffinity.&nbsp; Do add
--report-bindings to check what you're getting.<br>
<blockquote cite="mid201007281511.29517.yves.caniou@ens-lyon.fr"
 type="cite">
  <blockquote type="cite">
    <pre wrap="">On Jul 28, 2010, at 6:37 AM, Yves Caniou wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">Le Wednesday 28 July 2010 11:34:13 Ralph Castain, vous avez &eacute;crit :
      </pre>
      <blockquote type="cite">
        <pre wrap="">On Jul 27, 2010, at 11:18 PM, Yves Caniou wrote:
        </pre>
        <blockquote type="cite">
          <pre wrap="">Le Wednesday 28 July 2010 06:03:21 Nysal Jan, vous avez &eacute;crit :
          </pre>
          <blockquote type="cite">
            <pre wrap="">OMPI_COMM_WORLD_RANK can be used to get the MPI rank.
            </pre>
          </blockquote>
          <pre wrap="">Are processes affected to nodes sequentially, so that I can get the
NODE number from $OMPI_COMM_WORLD_RANK modulo the number of proc per
node?
          </pre>
        </blockquote>
        <pre wrap="">By default, yes. However, you can select alternative mapping methods.
        </pre>
      </blockquote>
      <pre wrap="">It reports to stderr, so the $OMPI_COMM_WORLD_RANK modulo the number of
proc per nodes seems more appropriate for what I need, right?

So is the following valid to put memory affinity?

script.sh:
 MYRANK=$OMPI_COMM_WORLD_RANK
 MYVAL=$(expr $MYRANK / 4)
 NODE=$(expr $MYVAL % 4)
 numactl --cpunodebind=$NODE --membind=$NODE $@

mpiexec ./script.sh -n 128 myappli myparam
      </pre>
    </blockquote>
  </blockquote>
</blockquote>
Another option is to use OMPI_COMM_WORLD_LOCAL_RANK.&nbsp; This environment
variable directly gives you the value you're looking for, regardless of
how process ranks are mapped to the nodes.<br>
<blockquote cite="mid201007281511.29517.yves.caniou@ens-lyon.fr"
 type="cite">
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap=""></pre>
      <pre wrap="">Which is better: using this option, or the cmd line with numactl (if it
works)? What is the difference?</pre>
    </blockquote>
  </blockquote>
</blockquote>
I don't know what's "better," but here are some potential issues:<br>
<br>
*) Different MPI implementations use different mechanisms for
specifying binding.&nbsp; So, if you want your solution to be "portable"...
well, if you want that, you're out of luck.&nbsp; But, perhaps some
mechanisms (command-line arguments, run-time scripts, etc.) might seem
easier for you to adapt than others.<br>
<br>
*) Some mechanisms bind processes at process launch time and some at
MPI_Init time.&nbsp; The former might be better.&nbsp; Otherwise, a process might
place some NUMA memory in a location before MPI_Init and then be moved
away from that memory when MPI_Init is encountered.&nbsp; I believe both the
numactl and OMPI --bind-to-core mechanisms have this characteristic.&nbsp;
(OMPI's older paffinity might not, but I don't remember for sure.)<br>
<br>
Mostly, if you're going to use just OMPI, the --bind-to-core
command-line argument might be the simplest.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13886.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13884.php">Eugene Loh: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13886.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13886.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13914.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
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
