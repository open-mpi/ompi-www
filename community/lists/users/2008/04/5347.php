<?
$subject_val = "[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 13:57:25 2008" -->
<!-- isoreceived="20080409175725" -->
<!-- sent="Wed, 9 Apr 2008 13:57:13 -0400" -->
<!-- isosent="20080409175713" -->
<!-- name="Bailey, Eric" -->
<!-- email="ebailey_at_[hidden]" -->
<!-- subject="[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu" -->
<!-- id="5CDB6DEFA3B8074999B6F988BD512C4A642AE0_at_CHM-EMAIL1.ad.mc.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu<br>
<strong>From:</strong> Bailey, Eric (<em>ebailey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 13:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Previous message:</strong> <a href="5346.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Reply:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Reply:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to use a cross compiler to build Open MPI for an embedded
<br>
ppc7448 running Linux 2.6 but during configure I get the following
<br>
error.
<br>
configure:25579: error: No atomic primitives available for
<br>
ppc74xx-linux-gnu
<br>
&nbsp;
<br>
Does anyone have an idea as to how to get past this error?
<br>
<p>I searched on the openmpi archives to see if any one else has seen
<br>
this.. and this is what I found, but it is related to another processor
<br>
(same error though) and solves specifically for it. 
<br>
<p>The configure is complaining about the missing atomic directives for
<br>
your processor. We have the MIPS atomic calls but not the MIPS64. We
<br>
just have to add them in the opal/asm/base.
<br>
<p>Unfortunately, there is no opal directory associated with the cross
<br>
compiler and I am not sure what lib might contain the atomic primitives
<br>
or where the configure program is looking for them.  Both could be an
<br>
issue.  i assume the atomic primitives are particular to the ppc7448
<br>
processor and the Linux OS that runs on it but the cross compiler tool
<br>
chain should contain them.
<br>
<p>The configure works fine for the local compiler / machine, it hits this
<br>
error only for cross compiling. I did modiify the config.sub file to add
<br>
the ppc74xx host.  Here is the configure command I am using.
<br>
<p>/home/MPI/openmpi-1.2.6/configure
<br>
--prefix=/home/MPI/openmpi-1.2.6/openmpi-1.2.6-install-7448
<br>
--host=ppc74xx-linux --build=i686-pc-linux-gnu
<br>
<p>configure finds and checks the c and c++ crosscompilers without any
<br>
problems and does quite alot until it hits this error and stops thus not
<br>
producing any Makefiels or finishing.
<br>
<p>Thanks,
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Previous message:</strong> <a href="5346.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Reply:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Reply:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
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
