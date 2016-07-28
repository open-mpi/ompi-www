<?
$subject_val = "[OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 22:52:25 2011" -->
<!-- isoreceived="20110210035225" -->
<!-- sent="Wed, 9 Feb 2011 19:52:12 -0800" -->
<!-- isosent="20110210035212" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="[OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C9789F95.E41A%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 22:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Maybe reply:</strong> <a href="15605.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have an app.ac1 file like below:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_vixen local]$ cat app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H vixen.egcrc.org   -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H vixen.egcrc.org   -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H blitzen.egcrc.org -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H blitzen.egcrc.org -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 8
<br>
<p>The program I run is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R x
<br>
Where x is [5..8].  The machines vixen and blitzen each run 2 runs.
<br>
<p>Here&#146;s the program fib.R:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[ tsakai_at_vixen local]$ cat fib.R
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# fib() computes, given index n, fibonacci number iteratively
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# here's the first dozen sequence (indexed from 0..11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# 1, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fib &lt;- function( n ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a &lt;- 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b &lt;- 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( i in 1:n ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t &lt;- b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b &lt;- a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a &lt;- a + t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;arg &lt;- commandArgs( TRUE )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;myHost &lt;- system( 'hostname', intern=TRUE )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cat( fib(arg), myHost, '\n' )
<br>
<p>It reads an argument from command line and produces a fibonacci number that
<br>
corresponds to that index, followed by the machine name.  Pretty simple stuff.
<br>
<p>Here&#146;s the run output:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_vixen local]$ mpirun -app app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;5 vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;8 vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;13 blitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;21 blitzen.egcrc.org
<br>
<p>Which is exactly what I expect.  So far so good.
<br>
<p>Now I want to run the same thing on cloud.  I launch 2 instances of the same
<br>
virtual machine, to which I get to by:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_vixen local]$ ssh &#150;A &#150;I ~/.ssh/tsakai machine-instance-A-public-dns
<br>
<p>Now I am on machine A:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # and I can go to machine B without password authentication,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # i.e., use public/private key
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-00-D1-F2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ ssh -i .ssh/tsakai domU-12-31-39-0C-C8-01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Last login: Wed Feb  9 20:51:48 2011 from 10.254.214.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # I am now on machine B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-0C-C8-01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # now show I can get to machine A without using password
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ ssh -i .ssh/tsakai domU-12-31-39-00-D1-F2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The authenticity of host 'domu-12-31-39-00-d1-f2 (10.254.214.4)' can't be established.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;RSA key fingerprint is e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Warning: Permanently added 'domu-12-31-39-00-d1-f2' (RSA) to the list of known hosts.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Last login: Wed Feb  9 20:49:34 2011 from 10.215.203.239
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-00-D1-F2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ exit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Connection to domU-12-31-39-00-D1-F2 closed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ exit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Connection to domU-12-31-39-0C-C8-01 closed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # back at machine A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-00-D1-F2
<br>
<p>As you can see, neither machine uses password for authentication; it uses
<br>
public/private key pairs.  There is no problem (that I can see) for ssh invocation
<br>
from one machine to the other.  This is so because I have a copy of public key
<br>
and a copy of private key on each instance.
<br>
<p>The app.ac file is identical, except the node names:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ cat app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 8
<br>
<p>Here&#146;s what happens with mpirun:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ mpirun -app app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tsakai_at_domu-12-31-39-0c-c8-01's password:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Permission denied, please try again.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tsakai_at_domu-12-31-39-0c-c8-01's password: mpirun: killing job...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun: clean termination accomplished
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
<p>Mpirun (or somebody else?) asks me password, which I don&#146;t have.
<br>
I end up typing control-C.
<br>
<p>Here&#146;s my question:
<br>
How can I get past authentication by mpirun where there is no password?
<br>
<p>I would appreciate your help/insight greatly.
<br>
<p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15546/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Maybe reply:</strong> <a href="15605.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
