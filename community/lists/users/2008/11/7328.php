<?
$subject_val = "[OMPI users] openmpi-1.2.8 and cygwin...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 13:33:25 2008" -->
<!-- isoreceived="20081117183325" -->
<!-- sent="Mon, 17 Nov 2008 19:33:12 +0100" -->
<!-- isosent="20081117183312" -->
<!-- name="Solibakke Per Bjarte" -->
<!-- email="Per.B.Solibakke_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.2.8 and cygwin..." -->
<!-- id="893074DDAECC0C4FA9127911ED377E38E425DF_at_piggvar.himolde.no" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.2.8 and cygwin...<br>
<strong>From:</strong> Solibakke Per Bjarte (<em>Per.B.Solibakke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-17 13:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7329.php">Shiqing Fan: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Previous message:</strong> <a href="7327.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7329.php">Shiqing Fan: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Reply:</strong> <a href="7329.php">Shiqing Fan: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to use CYGWIN + Open-mpi 1.2.8 / open-mpi-1.3b2 /openmpi-1.4a1r20006
<br>
&nbsp;
<br>
In all o+pen-mpi versions I receive the following error messege from 
<br>
&nbsp;
<br>
make all                              (see attached file: log.make)
<br>
&nbsp;
<br>
The configure works well:
<br>
./configure --prefix=/usr/local/ompi-1-2-8 --with-mpi-param-check=runtime --with-threads=posix --enable-mpi-threads --disable-io-romio --enable-mca-no-build=memory_mallopt,maffinity,paffinity --enable-contrib-no-build=vt --enable-shared
<br>
&nbsp;
<br>
Is this a bug in open-mpi-2.8 or is there something missing from CYGWIN installation?
<br>
&nbsp;
<br>
Reagards
<br>
PBSolibakke
<br>
&nbsp;
<br>
Associate Professor dr.oecon P.B.Solibakke
<br>
Molde University College
<br>
Phone: +4790035606 ; fax: +4794760843
<br>
E-mail: per.b.solibakke_at_[hidden]
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7328/log.make">log.make</a>
</ul>
<!-- attachment="log.make" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7329.php">Shiqing Fan: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Previous message:</strong> <a href="7327.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7329.php">Shiqing Fan: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Reply:</strong> <a href="7329.php">Shiqing Fan: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
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
