<?
$subject_val = "[OMPI users] Package mpi does not exist";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 05:40:09 2015" -->
<!-- isoreceived="20150914094009" -->
<!-- sent="Mon, 14 Sep 2015 09:40:07 +0000" -->
<!-- isosent="20150914094007" -->
<!-- name="Ibrahim Ikhlawi" -->
<!-- email="ibrahim_22s_at_[hidden]" -->
<!-- subject="[OMPI users] Package mpi does not exist" -->
<!-- id="DUB125-W60C82F2F7A790963E4C2EA975D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB125-W148FBD45B636253B7A2DA4975D0_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] Package mpi does not exist<br>
<strong>From:</strong> Ibrahim Ikhlawi (<em>ibrahim_22s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-14 05:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27570.php">Gilles Gouaillardet: "Re: [OMPI users] Package mpi does not exist"</a>
<li><strong>Previous message:</strong> <a href="27568.php">Ibrahim Ikhlawi: "[OMPI users] package mpi does not exist"</a>
<li><strong>In reply to:</strong> <a href="27568.php">Ibrahim Ikhlawi: "[OMPI users] package mpi does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27570.php">Gilles Gouaillardet: "Re: [OMPI users] Package mpi does not exist"</a>
<li><strong>Reply:</strong> <a href="27570.php">Gilles Gouaillardet: "Re: [OMPI users] Package mpi does not exist"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am beginner in OpenMPI. I want to run some examples from the extracted openmpi-1.10.0/example,
<br>
namely Hello.java and Ring.java.
<br>
But when I compile Hello.java with: 
<br>
javac Hello.java
<br>
<p>I get this error:
<br>
<p>Hello.java:25: error: package mpi does not exist
import mpi.*;
^
Hello.java:28: error: cannot find symbol
    static public void main(String[] args) throws MPIException {
                                                  ^
  symbol:   class MPIException
  location: class Hello
Hello.java:31: error: cannot find symbol
    MPI.Init(args);
    ^
  symbol:   variable MPI
  location: class Hello
Hello.java:33: error: package MPI does not exist
    int myrank = MPI.COMM_WORLD.getRank();
                    ^
Hello.java:34: error: package MPI does not exist
    int size = MPI.COMM_WORLD.getSize() ;
                  ^
Hello.java:37: error: cannot find symbol
    MPI.Finalize();
    ^
  symbol:   variable MPI
  location: class Hello
6 errors
<br>
How can I resolve this problem or where can I find the mpi.jar?
<br>
<p>Best regards,
<br>
Ibrahim
<br>
<p>PS: I cannot find mpi.jar in /lib directory.
<br>
&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27570.php">Gilles Gouaillardet: "Re: [OMPI users] Package mpi does not exist"</a>
<li><strong>Previous message:</strong> <a href="27568.php">Ibrahim Ikhlawi: "[OMPI users] package mpi does not exist"</a>
<li><strong>In reply to:</strong> <a href="27568.php">Ibrahim Ikhlawi: "[OMPI users] package mpi does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27570.php">Gilles Gouaillardet: "Re: [OMPI users] Package mpi does not exist"</a>
<li><strong>Reply:</strong> <a href="27570.php">Gilles Gouaillardet: "Re: [OMPI users] Package mpi does not exist"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
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
