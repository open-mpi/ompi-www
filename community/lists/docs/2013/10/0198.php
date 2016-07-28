<?
$subject_val = "[OMPI docs] Behavior of --host and --hostfile flags on mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 11 12:27:39 2013" -->
<!-- isoreceived="20131011162739" -->
<!-- sent="Fri, 11 Oct 2013 12:27:37 -0400" -->
<!-- isosent="20131011162737" -->
<!-- name="Kelly Black" -->
<!-- email="kjblack_at_[hidden]" -->
<!-- subject="[OMPI docs] Behavior of --host and --hostfile flags on mpirun" -->
<!-- id="CAC2Zy4MT6LqEkgbBUCSPpVxAisJEXzS7TqOknzfo-nk91_RVhQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI docs] Behavior of --host and --hostfile flags on mpirun<br>
<strong>From:</strong> Kelly Black (<em>kjblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-11 12:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Ralph Castain: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Ralph Castain: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0199.php">Ralph Castain: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a question about the --host and --hostfile flags used by mpirun. Do
<br>
you have to use fully qualified host names in the arguments to the --host
<br>
option if the fully qualified domain name is given in the host file?
<br>
<p>For example, if I have a host file like this:
<br>
<p># myhosts.txt
<br>
thingOne.clarkson.edu=4
<br>
thingTwo.clarkson.edu=4
<br>
<p>Can I then use the following command?
<br>
<p>mpirun --hostfile myhosts.txt --host thingOne -np 3 bubba
<br>
<p>Sincerely,
<br>
kel
<br>
_______________________________________________________
<br>
Kelly Black                     Phone: (315) 600-8334
<br>
Clarkson University             Fax:   (315) 268-2371
<br>
Department of Math. &amp; C.S.
<br>
PO Box 5815
<br>
Potsdam, NY 13699-5815
<br>
USA
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Ralph Castain: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Ralph Castain: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0199.php">Ralph Castain: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
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
