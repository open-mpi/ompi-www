<?
$subject_val = "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 15:03:36 2008" -->
<!-- isoreceived="20080815190336" -->
<!-- sent="Fri, 15 Aug 2008 15:04:41 -0400" -->
<!-- isosent="20080815190441" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault (11) Address not mapped (1)" -->
<!-- id="531893A968B34D40B36C7A6445BC828A01CF6561_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="af6a296b0808151003t39e12b18p2d69a8f60cfbdc82_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault (11) Address not mapped (1)<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-15 15:04:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6352.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6350.php">Doug Reeder: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>Can you give more info about the compilation steps, I just recompiled it
<br>
(using the internal stuff except for fftw) and was able to run an
<br>
example (output below). Did I miss something ?
<br>
<p>&nbsp;
<br>
<p>I recompiled / ran on a Platform OCS 5 cluster (based on RHEL 5), with
<br>
IB support (OFED)
<br>
<p>&nbsp;
<br>
<p>Partial ompi_info : 
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.6
<br>
<p>&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r17946
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.6
<br>
<p>&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r17946
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.6
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r17946
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/mbozzore/openmpi
<br>
<p>&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: mbozzore
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Aug 11 00:29:15 EDT 2008
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: tyan04.lsf.platform.com
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: mbozzore
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon Aug 11 00:33:54 EDT 2008
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: tyan04.lsf.platform.com
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
<p>&nbsp;Fortran90 bindings size: small
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
<p>&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
<p>&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
<p>&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;[mbozzore_at_tyan04 tests]$ mpirun -np 4 --machinefile ./hosts -x
<br>
LD_LIBRARY_PATH --mca btl openib,self ../bin/pw.x &lt; scf.in
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program PWSCF     v.4.0.1  starts ...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today is 15Aug2008 at 14:51:18
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parallel version (MPI)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of processors in use:       4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R &amp; G space division:  proc/pool =    4
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Norm-Conserving or Ultrasoft (Vanderbilt) Pseudopotentials or
<br>
PAW
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current dimensions of program pwscf are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max number of different atomic species (ntypx) = 10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max number of k-points (npk) =  40000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max angular momentum in pseudopotentials (lmaxx) =  3
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Iterative solution of the eigenvalue problem
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a parallel distributed memory algorithm will be used,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eigenstates matrixes will be distributed block like on
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ortho sub-group =    2*   2 procs
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Planes per process (thick) : nr3 = 16 npp =   4 ncplane =  256
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proc/  planes cols     G    planes cols    G      columns  G
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pool       (dense grid)       (smooth grid)      (wavefct grid)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1      4     41      366    4     41      366     13       70
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      4     41      366    4     41      366     14       71
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3      4     40      362    4     40      362     14       71
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      4     41      365    4     41      365     14       71
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tot     16    163     1459   16    163     1459     55      283
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bravais-lattice index     =            2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lattice parameter (a_0)   =      10.2000  a.u.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unit-cell volume          =     265.3020 (a.u.)^3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of atoms/cell      =            2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of atomic types    =            1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of electrons       =         8.00
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of Kohn-Sham states=            4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kinetic-energy cutoff     =      12.0000  Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charge density cutoff     =      48.0000  Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;convergence threshold     =      1.0E-06
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mixing beta               =       0.7000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of iterations used =            8  plain     mixing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exchange-correlation      =  SLA  PZ   NOGX NOGC (1100)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;celldm(1)=  10.200000  celldm(2)=   0.000000  celldm(3)=   0.000000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;celldm(4)=   0.000000  celldm(5)=   0.000000  celldm(6)=   0.000000
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crystal axes: (cart. coord. in units of a_0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a(1) = ( -0.500000  0.000000  0.500000 )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a(2) = (  0.000000  0.500000  0.500000 )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a(3) = ( -0.500000  0.500000  0.000000 )
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reciprocal axes: (cart. coord. in units 2 pi/a_0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b(1) = ( -1.000000 -1.000000  1.000000 )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b(2) = (  1.000000  1.000000  1.000000 )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b(3) = ( -1.000000  1.000000 -1.000000 )
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PseudoPot. # 1 for Si read from file Si.vbc.UPF
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pseudo is Norm-conserving, Zval =  4.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Generated by new atomic code, or converted to UPF format
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Using radial grid of  431 points,  2 beta functions with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l(1) =   0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l(2) =   1
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic species   valence    mass     pseudopotential
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Si             4.00    28.08600     Si( 1.00)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48 Sym.Ops. (with inversion)
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;Cartesian axes
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;site n.     atom                  positions (a_0 units)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           Si  tau(  1) = (   0.0000000   0.0000000
<br>
0.0000000  )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2           Si  tau(  2) = (   0.2500000   0.2500000
<br>
0.2500000  )
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of k points=    2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cart. coord. in units 2pi/a_0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k(    1) = (   0.2500000   0.2500000   0.2500000), wk =
<br>
0.5000000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k(    2) = (   0.2500000   0.2500000   0.7500000), wk =
<br>
1.5000000
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G cutoff =  126.4975  (   1459 G-vectors)     FFT grid: ( 16, 16,
<br>
16)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Largest allocated arrays     est. size (Mb)     dimensions
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kohn-Sham Wavefunctions         0.00 Mb     (     51,   4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NL pseudopotentials             0.01 Mb     (     51,   8)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each V/rho on FFT grid          0.02 Mb     (   1024)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each G-vector array             0.00 Mb     (    366)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G-vector shells                 0.00 Mb     (     42)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Largest temporary arrays     est. size (Mb)     dimensions
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Auxiliary wavefunctions         0.01 Mb     (     51,  16)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each subspace H/S matrix        0.00 Mb     (     16,  16)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each &lt;psi_i|beta_j&gt; matrix      0.00 Mb     (      8,   4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arrays for rho mixing           0.13 Mb     (   1024,   8)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Initial potential from superposition of free atoms
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starting charge    7.99901, renormalised to    8.00000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Starting wfc are    8 atomic wfcs
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total cpu time spent up to now is      0.10 secs
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;per-process dynamical memory:    21.9 Mb
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Self-consistent Calculation
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iteration #  1     ecut=    12.00 Ry     beta=0.70
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Davidson diagonalization with overlap
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ethr =  1.00E-02,  avg # of iterations =  2.0
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Threshold (ethr) on eigenvalues was too large:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diagonalizing with lowered threshold
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Davidson diagonalization with overlap
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ethr =  7.93E-04,  avg # of iterations =  1.0
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total cpu time spent up to now is      0.13 secs
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total energy              =   -15.79103983 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harris-Foulkes estimate   =   -15.81239602 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;estimated scf accuracy    &lt;     0.06375741 Ry
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iteration #  2     ecut=    12.00 Ry     beta=0.70
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Davidson diagonalization with overlap
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ethr =  7.97E-04,  avg # of iterations =  1.0
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total cpu time spent up to now is      0.15 secs
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total energy              =   -15.79409517 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harris-Foulkes estimate   =   -15.79442220 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;estimated scf accuracy    &lt;     0.00230261 Ry
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iteration #  3     ecut=    12.00 Ry     beta=0.70
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Davidson diagonalization with overlap
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ethr =  2.88E-05,  avg # of iterations =  2.0
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total cpu time spent up to now is      0.17 secs
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total energy              =   -15.79447768 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harris-Foulkes estimate   =   -15.79450039 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;estimated scf accuracy    &lt;     0.00006345 Ry
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iteration #  4     ecut=    12.00 Ry     beta=0.70
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Davidson diagonalization with overlap
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ethr =  7.93E-07,  avg # of iterations =  2.0
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total cpu time spent up to now is      0.19 secs
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total energy              =   -15.79449472 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harris-Foulkes estimate   =   -15.79449644 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;estimated scf accuracy    &lt;     0.00000455 Ry
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iteration #  5     ecut=    12.00 Ry     beta=0.70
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Davidson diagonalization with overlap
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ethr =  5.69E-08,  avg # of iterations =  2.5
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total cpu time spent up to now is      0.21 secs
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End of self-consistent calculation
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 0.2500 0.2500 0.2500 (   180 PWs)   bands (ev):
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-4.8701   2.3792   5.5371   5.5371
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 0.2500 0.2500 0.7500 (   186 PWs)   bands (ev):
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-2.9165  -0.0653   2.6795   4.0355
<br>
<p>&nbsp;
<br>
<p>!    total energy              =   -15.79449556 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harris-Foulkes estimate   =   -15.79449558 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;estimated scf accuracy    &lt;     0.00000005 Ry
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The total energy is the sum of the following terms:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one-electron contribution =     4.83378726 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hartree contribution      =     1.08428951 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xc contribution           =    -4.81281375 Ry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ewald contribution        =   -16.89975858 Ry
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;convergence has been achieved in   5 iterations
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;entering subroutine stress ...
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total   stress  (Ry/bohr**3)                   (kbar)     P=
<br>
-30.30
<br>
<p>&nbsp;&nbsp;-0.00020597   0.00000000   0.00000000        -30.30      0.00
<br>
0.00
<br>
<p>&nbsp;&nbsp;&nbsp;0.00000000  -0.00020597   0.00000000          0.00    -30.30
<br>
0.00
<br>
<p>&nbsp;&nbsp;&nbsp;0.00000000   0.00000000  -0.00020597          0.00      0.00
<br>
-30.30
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Writing output data file pwscf.save
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PWSCF        :     0.28s CPU time,    0.39s wall time
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_run     :     0.05s CPU
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;electrons    :     0.11s CPU
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stress       :     0.00s CPU
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Called by init_run:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wfcinit      :     0.01s CPU
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;potinit      :     0.00s CPU
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Called by electrons:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c_bands      :     0.09s CPU (       6 calls,   0.015 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum_band     :     0.01s CPU (       6 calls,   0.001 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v_of_rho     :     0.00s CPU (       6 calls,   0.001 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mix_rho      :     0.00s CPU (       6 calls,   0.000 s avg)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Called by c_bands:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_us_2    :     0.00s CPU (      28 calls,   0.000 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cegterg      :     0.09s CPU (      12 calls,   0.007 s avg)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Called by *egterg:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h_psi        :     0.01s CPU (      35 calls,   0.000 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g_psi        :     0.00s CPU (      21 calls,   0.000 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cdiaghg      :     0.06s CPU (      31 calls,   0.002 s avg)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Called by h_psi:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add_vuspsi   :     0.00s CPU (      35 calls,   0.000 s avg)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General routines
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;calbec       :     0.00s CPU (      37 calls,   0.000 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cft3s        :     0.02s CPU (     354 calls,   0.000 s avg)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;davcio       :     0.00s CPU (      40 calls,   0.000 s avg)
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parallel routines
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fft_scatter  :     0.01s CPU (     354 calls,   0.000 s avg)
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Mehdi Bozzo-Rey &lt;mailto:mbozzore_at_[hidden]&gt; 
<br>
<p>Open Source Solution Developer
<br>
<p>Platform OCS5
<br>
&lt;<a href="http://www.platform.com/Products/platform-open-cluster-stack5">http://www.platform.com/Products/platform-open-cluster-stack5</a>&gt; 
<br>
<p>Platform computing
<br>
<p>Phone: +1 905 948 4649
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of C.Y. Lee
<br>
Sent: August-15-08 1:03 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Segmentation fault (11) Address not mapped (1)
<br>
<p>&nbsp;
<br>
<p>All,
<br>
<p>&nbsp;
<br>
<p>I had a similar problem as James described in an earlier message:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/07/6204.php">http://www.open-mpi.org/community/lists/users/2008/07/6204.php</a>
<br>
<p>While he was able to recompile openmpi to solve the problem, I had no
<br>
luck with my RedHat Enterprise 5 system.
<br>
<p>Here are two other threads with similar issues regarding openmpi on
<br>
Ubuntu and OSX which were solved:
<br>
<a href="https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837">https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837</a>
<br>
<p><a href="http://www.somewhereville.com/?cat=55">http://www.somewhereville.com/?cat=55</a>
<br>
<p>&nbsp;
<br>
<p>Now...
<br>
<p>Here is my story:
<br>
<p>I had Quantum Espresso (QE) running without problem using openmpi.
<br>
<p>However, when I tried to recompile QE with a recompiled fftw-2.1.5, it
<br>
compiled without any error. But when I ran QE, it gave me the error
<br>
below:
<br>
<p>&nbsp;
<br>
<p>*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
<p>Signal code: Address not mapped (1)
<br>
Failing at address: 0x22071b70
<br>
[ 0] /lib64/libpthread.so.0 [0x352420de70]
<br>
[ 1] /usr/lib64/liblapack.so.3(dsytf2_+0xc43) [0x2aaaaac9f5e3]
<br>
[ 2] /usr/lib64/liblapack.so.3(dsytrf_+0x407) [0x2aaaaaca0567]
<br>
[ 3] /opt/espresso-4.0.1/bin/pw.x(mix_rho_+0x828) [0x5044b8]
<br>
[ 4] /opt/espresso-4.0.1/bin/pw.x(electrons_+0xb37) [0x4eae47]
<br>
[ 5] /opt/espresso-4.0.1/bin/pw.x(MAIN__+0xbf) [0x42b3af]
<br>
[ 6] /opt/espresso-4.0.1/bin/pw.x(main+0xe) [0x6aad5e]
<br>
[ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x352361d8a4]
<br>
[ 8] /opt/espresso-4.0.1/bin/pw.x [0x42b239]
<br>
&nbsp;*** End of error message ***
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;From what I read from the above links, it seems to be a bug in openmpi.
</span><br>
<p>Please share your thoughts on this, thank you!
<br>
<p>&nbsp;
<br>
<p>CY
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6351/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6352.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6350.php">Doug Reeder: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
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
