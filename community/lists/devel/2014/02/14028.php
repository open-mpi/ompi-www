<?
$subject_val = "[OMPI devel] openmpi installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 11:37:29 2014" -->
<!-- isoreceived="20140207163729" -->
<!-- sent="Fri, 7 Feb 2014 19:37:28 +0300" -->
<!-- isosent="20140207163728" -->
<!-- name="Talla" -->
<!-- email="jtalla_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi installation" -->
<!-- id="CAGCe5YqTEH-pvu7CMNP2Kzg75+o=AfGnyqe5zb+fnhCkjzzYSg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi installation<br>
<strong>From:</strong> Talla (<em>jtalla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 11:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14029.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Previous message:</strong> <a href="14027.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14029.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Reply:</strong> <a href="14029.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello sir
<br>
I downloaded openmpi 1.7 and followed the installation instructions:
<br>
cd openmpi
<br>
./configure --prefix=&quot;/home/$USER/.openmpi&quot;
<br>
<p>make
<br>
make install
<br>
export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot;
<br>
export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
<br>
<p>echo export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot; &gt;&gt; /home/$USER/.bashrc
<br>
echo export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
<br>
<span class="quotelev2">&gt;&gt; /home/$USER/.bashrc
</span><br>
<p>No error messages appear, accept &quot;nothing to do with all-em&quot;. However when
<br>
I run mpicc or mpirun it says no command. So I am not sure if the mpi
<br>
installed correctly in my red hat server or not. I don't know what I am
<br>
missing so I would really appreciate it if you help me as I am struggling
<br>
with this for a while.
<br>
<p>Thank you in advance. Talla
<br>
<p><p><pre>
-- 
*######################*
*Dr. Jamal A TallaAssistant professorDepartment of Physics, **Rm 2139*
*College of Science,09 King Faisal UniversityP.O. Box 380, Al-Ahsaa** -
31982*
City Code: HOF
*Kingdom of Saudi ArabiaCell Phone: +966564542399*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14029.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Previous message:</strong> <a href="14027.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14029.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>Reply:</strong> <a href="14029.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
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
