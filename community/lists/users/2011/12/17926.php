<?
$subject_val = "[OMPI users] Problem on 3D contiguous array with MPI_TYPE_VECTOR";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 11 07:06:21 2011" -->
<!-- isoreceived="20111211120621" -->
<!-- sent="Sun, 11 Dec 2011 13:06:17 +0100" -->
<!-- isosent="20111211120617" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="[OMPI users] Problem on 3D contiguous array with MPI_TYPE_VECTOR" -->
<!-- id="CAPW4YGLkTxZ9osKbbXnMuiHjY=PxtfniyRJENVNVFYtCVSsWTQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem on 3D contiguous array with MPI_TYPE_VECTOR<br>
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-11 07:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17927.php">Andreas Schäfer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I try to use MPI for solving the Fourier equation in 3D. In the code, I
<br>
have the following parameters :
<br>
<p>number of domains on Ox : x_domains
<br>
number of domains on Oy : y_domains
<br>
number of domains on Oz : z_domains
<br>
<p>size of grid on Ox: size_x
<br>
size of grid on Oy: size_y
<br>
size of grid on Oz: size_z
<br>
<p>elements per Ox domain : xcell=(size_x/x_domains)
<br>
elements per Oy domain : ycell=(size_y/y_domains)
<br>
elements per Oz domain : zcell=(size_z/z_domains)
<br>
<p>Total sizes of the 3D grid (including the ghost cells) :
<br>
<p>size_tot_x=size_x+2*x_domains+2
<br>
size_tot_y=size_y+2*y_domains+2
<br>
size_tot_z=size_z+2*z_domains+2
<br>
<p>------------------------------------------------------------
<br>
<p>I have determined the coordinates of corners of each box as function of the
<br>
rank process &quot;me&quot; :
<br>
<p>I have &quot;xs(me)&quot; (x start), &quot;xe(me)&quot; (x end), &quot;ys(me)&quot;, &quot;ye(me)&quot;, &quot;zs(me)&quot;
<br>
and &quot;ze(me)&quot;.
<br>
<p>Moreover, I have defined 3 types of matrix ( Oxz plan, Oxy and 0yz ) for
<br>
the intercommunication between the processes. I am not sure about *the
<br>
distance between two elements* in the following definition of the *matrix
<br>
type* :
<br>
----------------------------------------------------------------------------------------------------------------------
<br>
! Creation of &quot;Matrix&quot; type :
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_TYPE_VECTOR (nb_columns, nb_rows,* step_between_two_elements* ,
<br>
MPI_DOUBLE_PRECISION ,* matrix_type *,code)
<br>
-----------------------------------------------------------------------------------------------------------------------
<br>
<p>Here are the part of the code where I have defined the 3 types of Matrix :
<br>
<p>-----------------------------------------------------------------------------------------------------------------------
<br>
! Create matrix data type to communicate on horizontal Oxz plan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_VECTOR( xcell, zcell, *size_tot_y*,
<br>
MPI_DOUBLE_PRECISION &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, matrix_type_oxz, infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_COMMIT(matrix_type_oxz, infompi)
<br>
-----------------------------------------------------------------------------------------------------------------------
<br>
<p>-----------------------------------------------------------------------------------------------------------------------
<br>
! Create matrix data type to communicate on vertical Oxy plan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_VECTOR( xcell, ycell, *size_tot_z*,
<br>
MPI_DOUBLE_PRECISION &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, matrix_type_oxy, infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_COMMIT(matrix_type_oxy, infompi)
<br>
-----------------------------------------------------------------------------------------------------------------------
<br>
<p>-----------------------------------------------------------------------------------------------------------------------
<br>
! Create matrix data type to communicate on vertical Oyz plan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_VECTOR( zcell, ycell, *size_tot_x*,
<br>
MPI_DOUBLE_PRECISION &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, matrix_type_oyz, infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_COMMIT(matrix_type_oyz, infompi)
<br>
-----------------------------------------------------------------------------------------------------------------------
<br>
<p>As you can see, I have doubts about the contiguous distance (*size_tot_x,
<br>
size_tot_y, size_tot_z*) for the 3 types above.
<br>
<p>For the 2D case, I use the row_type and the contiguous distance is
<br>
&quot;size_tot_y&quot; but for 3D, I don't know .
<br>
<p>Could you help me please ?
<br>
<p><p>Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17926/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17927.php">Andreas Schäfer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- nextthread="start" -->
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
