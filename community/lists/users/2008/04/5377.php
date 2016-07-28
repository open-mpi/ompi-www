<?
$subject_val = "[OMPI users] Passing data structure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 12:34:02 2008" -->
<!-- isoreceived="20080411163402" -->
<!-- sent="Fri, 11 Apr 2008 18:33:53 +0200" -->
<!-- isosent="20080411163353" -->
<!-- name="Alessandro Palandri" -->
<!-- email="alessandro.palandri_at_[hidden]" -->
<!-- subject="[OMPI users] Passing data structure" -->
<!-- id="3345ae180804110933m3bb9e35cpbbd65fd9c8f438ec_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Passing data structure<br>
<strong>From:</strong> Alessandro Palandri (<em>alessandro.palandri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 12:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Previous message:</strong> <a href="5376.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] i386 with x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Reply:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Reply:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am a new user of MPI and I would like to have your opinion on the
<br>
following issue.
<br>
With 1 processor I keep the data in
<br>
<p>std::vector&lt;std::vector&lt;double&gt; &gt; X
<br>
<p>Then I call a function that takes various arguments, among which X[ i ] and
<br>
X[ j ], i.e. two sub-vectors of X.
<br>
<p>With MPI I would have the same function execute on different processors for
<br>
different values of i and j in X[ i ] and X[ j ].
<br>
<p><span class="quotelev1">&gt;From my understanding since std::vector is not an MPI type it cannot be
</span><br>
passed neither as a message nor an element of an MPI structure. I thought of
<br>
using
<br>
<p>double X[200][4000]
<br>
<p>which MPI would pass but I don't see how to isolate a single row, i.e. X[99]
<br>
would not make sense in this context.
<br>
<p>Any suggestion for an efficient and possibly simple solution?
<br>
<p>Thank you for your help,
<br>
<p>Alessandro
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Previous message:</strong> <a href="5376.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] i386 with x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Reply:</strong> <a href="5378.php">Danesh Daroui: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Reply:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
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
