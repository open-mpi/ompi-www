program parallel_burn

implicit none
include "mpif.h"

integer :: nproc,nproc_calc,rank,local_mat,icomm,ierr,flag,tmp_def,dummyi,nelements,remainder,nrepeat,begin_mat,n_to_add
integer :: status(MPI_STATUS_SIZE)
integer :: getIarg,supp_flag,i,i2,i3,nmat,numat,sizemat,sizesuffix,n,numarg
integer :: system
integer,allocatable,dimension(:):: mat

real :: rrepeat

character(6) :: code     
character(140) :: user,tmpfile,batch6,string1,string2,string3,rand_suffix,burn_tmpdir,burn_tmpdir_prefix,filen,current_dir,filedef,cfile
character(140) :: filein,filein2,fileout
character(1),allocatable,dimension(:) :: suffix
logical :: file_exists, dir_e, ltest

call MPI_INIT(ierr)
icomm = MPI_COMM_WORLD
call MPI_COMM_SIZE(icomm,nproc,ierr)
call MPI_COMM_RANK(icomm,rank,ierr)

nproc_calc = nproc-1
call getcwd(current_dir)
numarg = iargc()

call getarg(1,rand_suffix)
call getarg(2,code)
supp_flag = getIarg(3)
call getarg(4,user)
user = trim(adjustl(user))

i = getIarg(5) 
i2 = getIarg(6) 
i3 = getIarg(7) 

nmat = getIarg(8)

call getarg(9,tmpfile)
tmpfile = trim(adjustl(tmpfile))

sizemat = getIarg(10)
allocate(mat(sizemat))

do n=1,sizemat
    mat(n) = getIarg(10+n)
enddo

if (numarg > sizemat+10) then
    sizesuffix = getIarg(sizemat+11)
    allocate(suffix(sizesuffix))
    do n=1,sizesuffix
        call getarg(sizemat+12+n,suffix(n))
    enddo
endif

batch6 = '/opt/scale/scale6.1/cmds/batch6.1'
burn_tmpdir_prefix = '/tmp/'

call MPI_BARRIER(icomm,ierr)

if (rank == 0) then
    numat = 0
    
    if (i > 1) then
        if (i2 == 1) then
            do n=1,nmat    
                write(string1,*) n
                INQUIRE(FILE='alldnz_'//trim(adjustl(string1)), EXIST=file_exists)
                if (file_exists) dummyi=system('cp alldnz_'//trim(adjustl(string1))//' dnz_'//trim(adjustl(string1)))
            enddo
        endif
    endif   
    
    write(string1,*) nmat
    if (trim(adjustl(code)) == 'C') then
        print*, "Run CINDER for "//trim(adjustl(string1))//" materials"
    else if (trim(adjustl(code)) == 's') then
        print*, "Run ORIGEN for "//trim(adjustl(string1))//" materials"
    else if (trim(adjustl(code)) == 'couple') then
        print*, "Run COUPLE for "//trim(adjustl(string1))//" materials"
    endif
    
    if (nproc_calc > 1) then
        remainder = mod(nmat,nproc_calc-1)
        rrepeat = float(nmat)/(nproc_calc-1)
        nrepeat = FLOOR(rrepeat)
        numat = 1
        
        do n=1,nproc_calc
            n_to_add = nrepeat - 1
            if (n<(remainder-nrepeat+1)) n_to_add = nrepeat
            
            call MPI_SEND(numat,1,MPI_INTEGER,n,0,icomm,ierr)
            call MPI_SEND(n_to_add,1,MPI_INTEGER,n,0,icomm,ierr)
            if (n<(remainder-nrepeat+1)) then
                numat = numat + nrepeat + 1
            else
                numat = numat + nrepeat
            endif
        enddo
    else
        call MPI_SEND(1,1,MPI_INTEGER,1,0,icomm,ierr)
        call MPI_SEND(nmat-1,1,MPI_INTEGER,1,0,icomm,ierr)
    endif
else
    call MPI_Recv(begin_mat,1,MPI_INTEGER,0,0,icomm,status,ierr)
    call MPI_Recv(nrepeat,1,MPI_INTEGER,0,0,icomm,status,ierr)
    
    do local_mat = begin_mat,begin_mat+nrepeat
        if (local_mat > nmat) exit
        if (trim(adjustl(code)) == 'C') then
            write(string1,*) local_mat
            write(string2,*) i
            
            if (mat(local_mat) > 0) then
                burn_tmpdir = trim(adjustl(burn_tmpdir_prefix))//trim(adjustl(user))//'.'//trim(adjustl(string1))//'.'//trim(adjustl(rand_suffix))
                filen = trim(adjustl(tmpfile))//'/input_'//trim(adjustl(string1))//'.'//trim(adjustl(string2))
                if (supp_flag == 1) filen = trim(adjustl(tmpfile))//'/input_'//trim(adjustl(string1))//'.tmp'
                dummyi = system('mkdir '//trim(adjustl(burn_tmpdir)))
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/cxupdate_'//trim(adjustl(string1))//' '//trim(adjustl(burn_tmpdir))//'/cxupdate')
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/'//trim(adjustl(filen))//' '//trim(adjustl(burn_tmpdir))//'/input')
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/fluxes '//trim(adjustl(burn_tmpdir))//'/fluxes')
                  
                if (i > 1) then
                    dummyi = system('cp dnz_'//trim(adjustl(string1))//' '//trim(adjustl(burn_tmpdir))//'/dnz')
                else 
                    INQUIRE(FILE=trim(adjustl(burn_tmpdir))//'/dnz', EXIST=file_exists)
                    if (file_exists) dummyi = system('rm dnz')
                endif
                
                INQUIRE(FILE=trim(adjustl(burn_tmpdir))//'/splprods', EXIST=file_exists)
                if (file_exists) dummyi = system('rm splprods')
                
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/cinder90 '//trim(adjustl(burn_tmpdir))//'/cinder90')
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/calculate_macroxs.py '//trim(adjustl(burn_tmpdir))//'/calculate_macroxs.py')
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/mass2.dat '//trim(adjustl(burn_tmpdir))//'/mass2.dat')
                INQUIRE(FILE=trim(adjustl(burn_tmpdir))//'/material', EXIST=file_exists)
                if (file_exists) dummyi = system('rm '//trim(adjustl(burn_tmpdir))//'/material')
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/material '//trim(adjustl(burn_tmpdir))//'/material')
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/library '//trim(adjustl(burn_tmpdir))//'/library')
                dummyi = system('cd '//trim(adjustl(burn_tmpdir))//' && ./cinder90 1> mblog_'//trim(adjustl(string1))//'.txt 2>&1')
                dummyi = system('cd '//trim(adjustl(burn_tmpdir))//' && ./calculate_macroxs.py 1> mblog_'//trim(adjustl(string1))//'.txt 2>&1')
                dummyi = system('cp '//trim(adjustl(burn_tmpdir))//'/macxs_frimp.dat macxs_frimp_'//trim(adjustl(string1)))
                filen = trim(adjustl(tmpfile))//'macxs_'//trim(adjustl(string1))//'.'//trim(adjustl(string2))
                dummyi = system('cp '//trim(adjustl(burn_tmpdir))//'/macxs_frimp.dat '//trim(adjustl(filen)))
                                    
                if (supp_flag == 1) dummyi = system('cp '//trim(adjustl(burn_tmpdir))//'/input '//trim(adjustl(tmpfile))//'/cinder.inp_'//trim(adjustl(string1))//'.'//trim(adjustl(string2)))
                
                dummyi = system('cp '//trim(adjustl(burn_tmpdir))//'/alldnz alldnz_'//trim(adjustl(string1)))
                filen = trim(adjustl(tmpfile))//'results_'//trim(adjustl(string1))//'.'//trim(adjustl(string2))
                dummyi = system('cp '//trim(adjustl(burn_tmpdir))//'/results '//trim(adjustl(filen)))
                
                dummyi = system('rm -rf '//trim(adjustl(burn_tmpdir)))
            endif

        elseif (trim(adjustl(code)) == 's') then
            write(string1,*) local_mat
            write(string2,*) i
            
            if (mat(local_mat) > 0) then
                burn_tmpdir = trim(adjustl(burn_tmpdir_prefix))//trim(adjustl(user))//'.'//trim(adjustl(string1))//'.'//trim(adjustl(rand_suffix))
                dummyi = system('mkdir '//trim(adjustl(burn_tmpdir)))
                dummyi = system('ln -s '//trim(adjustl(burn_tmpdir_prefix))//'/scale_needs/* '//trim(adjustl(burn_tmpdir)))
                
                if (supp_flag == 1) then
                    cfile = 'coup_'//trim(adjustl(string1))//'.inp'
                    dummyi = system('cp TAPE7_'//trim(adjustl(string1))//'.OUT '//trim(adjustl(burn_tmpdir))//'/')
    
                    INQUIRE(FILE='coup1_'//trim(adjustl(string1))//'.out', EXIST=file_exists)
                    if (file_exists) dummyi = system('cp coup*_'//trim(adjustl(string1))//'.out '//trim(adjustl(burn_tmpdir))//'/')
                    
                    open(17, file=trim(adjustl(burn_tmpdir))//'/'//trim(adjustl(cfile)), status='unknown')
                    
                    open(18, file=trim(adjustl(burn_tmpdir))//'/coup1_'//trim(adjustl(string1))//'.out', status='unknown')
                    do
                        read (18,'(A140)',iostat=ierr) string3
                        if (ierr < 0) exit
                        write (17,'(A120)') string3
                    enddo
                    close(18)
                    
                    open(18, file=trim(adjustl(burn_tmpdir))//'/coup4_'//trim(adjustl(string1))//'.out', status='unknown')
                    do
                        read (18,'(A140)',iostat=ierr) string3
                        if (ierr < 0) exit
                        write (17,'(A120)') string3
                    enddo
                    close(18)
                    
                    open(18, file=trim(adjustl(burn_tmpdir))//'/coup2_'//trim(adjustl(string1))//'.out', status='unknown')
                    do
                        read (18,'(A140)',iostat=ierr) string3
                        if (ierr < 0) exit
                        write (17,'(A120)') string3
                    enddo
                    close(18)
                    
                    open(18, file=trim(adjustl(burn_tmpdir))//'/coup5_'//trim(adjustl(string1))//'.out', status='unknown')
                    do
                        read (18,'(A140)',iostat=ierr) string3
                        if (ierr < 0) exit
                        write (17,'(A120)') string3
                    enddo
                    close(18)
                    
                    open(18, file=trim(adjustl(burn_tmpdir))//'/coup3_'//trim(adjustl(string1))//'.out', status='unknown')
                    do
                        read (18,'(A140)',iostat=ierr) string3
                        if (ierr < 0) exit
                        write (17,'(A120)') string3
                    enddo
                    close(18)
                    
                    open(18, file=trim(adjustl(burn_tmpdir))//'/coup6_'//trim(adjustl(string1))//'.out', status='unknown')
                    do
                        read (18,'(A140)',iostat=ierr) string3
                        if (ierr < 0) exit
                        write (17,'(A120)') string3
                    enddo
                    close(18)
                                    
                    close(17)
                    
                    filein = trim(adjustl(burn_tmpdir))//'/coup_'//trim(adjustl(string1))//'.inp'
                    fileout = trim(adjustl(burn_tmpdir))//'/coup_'//trim(adjustl(string1))//'.out'
                    dummyi = system ('cd '//trim(adjustl(burn_tmpdir))//' && ./couple < '//trim(adjustl(filein))//' 1>mblog.txt 2>&1')
                    dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/_out000000000000000000 '//trim(adjustl(fileout)))
                    dummyi = system ('rm '//trim(adjustl(burn_tmpdir))//'/underscore* > /dev/null 2>&1')
                    dummyi = system ('rm '//trim(adjustl(burn_tmpdir))//'/_* > /dev/null 2>&1')
                    dummyi = system ('mv finput_'//trim(adjustl(string1))//'.TMP finput_'//trim(adjustl(string1))//'.INP')
                endif
                
                dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(burn_tmpdir))//'/ft33f001')
                dummyi = system ('cp '//trim(adjustl(current_dir))//'/finput_'//trim(adjustl(string1))//'.INP '//trim(adjustl(burn_tmpdir))//'/orig.inp')
                fileout = 'TAPE6_'//trim(adjustl(string1))//'.OUT'
                dummyi = system ('cp '//trim(adjustl(current_dir))//'/TAPE7_'//trim(adjustl(string1))//'.OUT '//trim(adjustl(burn_tmpdir))//'/ft71f001')
                dummyi = system ('cd '//trim(adjustl(burn_tmpdir))//' && ./origen < orig.inp 1>mblog.txt 2>&1')
                dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/_out000000000000000000 '//trim(adjustl(burn_tmpdir))//'/'//trim(adjustl(fileout)))
                dummyi = system ('rm '//trim(adjustl(burn_tmpdir))//'/underscore* > /dev/null 2>&1')
                dummyi = system ('rm '//trim(adjustl(burn_tmpdir))//'/_* > /dev/null 2>&1')
                if (supp_flag == 1) dummyi = system('cp finput_'//trim(adjustl(string1))//'.INP '//trim(adjustl(tmpfile))//'/orig.inp_'//trim(adjustl(string1))//'.'//trim(adjustl(string2)))
                
                if (supp_flag == 2) dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/ft33f001 '//trim(adjustl(current_dir))//'/TAPE9_'//trim(adjustl(string1))//'.INP')

                dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/ft71f001 '//trim(adjustl(current_dir))//'/TAPE7_'//trim(adjustl(string1))//'.OUT') 
                dummyi = system('rm -rf '//trim(adjustl(burn_tmpdir)))
                print*, "got here1", rank
            endif 
            
            !Check on mt>0 nixes any unburned, but q_calc = yes calculations ... if scale fixed to include q_calc (qu235 = 0.0),
            !then this check must be removed
            if (mat(local_mat) > 0) then
                if (supp_flag == 1) then
                    if (i < 10) then
                        filen = trim(adjustl(tmpfile))//'TAPE9_'//trim(adjustl(string1))//'.IN'//trim(adjustl(string2))
                        dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(filen)))
                    elseif (i < 100) then
                        filen = trim(adjustl(tmpfile))//'TAPE9_'//trim(adjustl(string1))//'.I'//trim(adjustl(string2))
                        dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(filen)))
                    else
                        filen = trim(adjustl(tmpfile))//'TAPE9_'//trim(adjustl(string1))//'.'//trim(adjustl(string2))
                        dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(filen)))
                    endif
                endif
            endif

            print*, "got here2", rank
            
        elseif (trim(adjustl(code)) == 'couple' ) then
            write(string1,*) local_mat
            write(string2,*) i

            filedef = 'params3.dat'
            
            open (17, file=trim(adjustl(filedef)), status='old')
            read (17,'(i6)') tmp_def
            close(17)
            
            if (mat(local_mat) > 0) then
                burn_tmpdir = trim(adjustl(burn_tmpdir_prefix))//trim(adjustl(user))//'.'//trim(adjustl(string1))//'.'//trim(adjustl(rand_suffix))
                dummyi = system('export TMPDIR='//trim(adjustl(burn_tmpdir)))
                
                cfile = 'coup_'//trim(adjustl(string1))//'.inp'
                dummyi = system('mkdir '//trim(adjustl(burn_tmpdir)))
                dummyi = system('ln -s '//trim(adjustl(burn_tmpdir_prefix))//'/scale_needs/* '//trim(adjustl(burn_tmpdir)))
                dummyi = system('cp TAPE7_'//trim(adjustl(string1))//'.OUT '//trim(adjustl(burn_tmpdir))//'/')

                INQUIRE(FILE='coup1_'//trim(adjustl(string1))//'.out', EXIST=file_exists)
                if (file_exists) dummyi = system('cp coup*_'//trim(adjustl(string1))//'.out '//trim(adjustl(burn_tmpdir))//'/')
                
                open(17, file=trim(adjustl(burn_tmpdir))//'/'//trim(adjustl(cfile)), status='unknown')
                
                open(18, file=trim(adjustl(burn_tmpdir))//'/coup1_'//trim(adjustl(string1))//'.out', status='unknown')
                do
                    read (18,'(A140)',iostat=ierr) string3
                    if (ierr < 0) exit
                    write (17,'(A120)') string3
                enddo
                close(18)
                
                open(18, file=trim(adjustl(burn_tmpdir))//'/coup4_'//trim(adjustl(string1))//'.out', status='unknown')
                do
                    read (18,'(A140)',iostat=ierr) string3
                    if (ierr < 0) exit
                    write (17,'(A120)') string3
                enddo
                close(18)
                
                open(18, file=trim(adjustl(burn_tmpdir))//'/coup2_'//trim(adjustl(string1))//'.out', status='unknown')
                do
                    read (18,'(A140)',iostat=ierr) string3
                    if (ierr < 0) exit
                    write (17,'(A120)') string3
                enddo
                close(18)
                
                open(18, file=trim(adjustl(burn_tmpdir))//'/coup5_'//trim(adjustl(string1))//'.out', status='unknown')
                do
                    read (18,'(A140)',iostat=ierr) string3
                    if (ierr < 0) exit
                    write (17,'(A120)') string3
                enddo
                close(18)
                
                open(18, file=trim(adjustl(burn_tmpdir))//'/coup3_'//trim(adjustl(string1))//'.out', status='unknown')
                do
                    read (18,'(A140)',iostat=ierr) string3
                    if (ierr < 0) exit
                    write (17,'(A120)') string3
                enddo
                close(18)
                
                open(18, file=trim(adjustl(burn_tmpdir))//'/coup6_'//trim(adjustl(string1))//'.out', status='unknown')
                do
                    read (18,'(A140)',iostat=ierr) string3
                    if (ierr < 0) exit
                    write (17,'(A120)') string3
                enddo
                close(18)
                                
                close(17)
                
                filein = trim(adjustl(burn_tmpdir))//'/coup_'//trim(adjustl(string1))//'.inp'
                fileout = 'coup_'//trim(adjustl(string1))//'.out'
                filein2 = trim(adjustl(tmpfile))//'/coup_'//trim(adjustl(string1))//'.i'//trim(adjustl(string2))
                dummyi = system ('cp '//trim(adjustl(filein))//' '//trim(adjustl(filein2)))
                dummyi = system ('cd '//trim(adjustl(burn_tmpdir))//' && ./couple < '//trim(adjustl(filein))//' 1>mblog.txt 2>&1')
                dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/_out000000000000000000 '//trim(adjustl(burn_tmpdir))//'/'//trim(adjustl(fileout)))
                dummyi = system ('rm '//trim(adjustl(burn_tmpdir))//'/underscore* > /dev/null 2>&1')
                dummyi = system ('rm '//trim(adjustl(burn_tmpdir))//'/_* > /dev/null 2>&1')
                dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/ft33f001 '//trim(adjustl(current_dir))//'/TAPE9_'//trim(adjustl(string1))//'.INP')
                dummyi = system('rm -rf '//trim(adjustl(burn_tmpdir)))
                print*, "got here1", rank

            else
                write(string2,*) tmp_def
                dummyi = system ('cp TAPE9_'//trim(adjustl(string2))//'.INP TAPE9_'//trim(adjustl(string1))//'.INP')
            endif
            
            print*, "got here2", rank    

        elseif (trim(adjustl(code)) == 'rmall' ) then
            dummyi = system ('rm -rf '//trim(adjustl(burn_tmpdir_prefix))//trim(adjustl(user))//'.*.'//trim(adjustl(rand_suffix))//' 1>/dev/null 2>&1')
        else
            write(string1,*) local_mat
            write(string2,*) i
            
            if (mat(local_mat) > 0) then
                burn_tmpdir = trim(adjustl(burn_tmpdir_prefix))//trim(adjustl(user))//'.'//trim(adjustl(string1))//'.'//trim(adjustl(rand_suffix))
                INQUIRE(FILE=trim(adjustl(burn_tmpdir))//'/mblog.txt', EXIST=dir_e)
                if ( dir_e ) then
                    continue
                else
                    dummyi = system('mkdir '//trim(adjustl(burn_tmpdir)))
                endif            
                
                if (supp_flag == 1) dummyi = system ('mv TAPE5_'//trim(adjustl(string1))//'.TMP TAPE5_'//trim(adjustl(string1))//'.INP')
                dummyi = system ('cp TAPE5_'//trim(adjustl(string1))//'.INP '//trim(adjustl(burn_tmpdir))//'/TAPE5.INP')
                dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(burn_tmpdir))//'/TAPE9.INP')
                dummyi = system ('cp TAPE4_'//trim(adjustl(string1))//'.INP '//trim(adjustl(burn_tmpdir))//'/TAPE4.INP')
                
                dummyi = system('ln -s '//trim(adjustl(current_dir))//'/o2_fast '//trim(adjustl(burn_tmpdir))//'/o2_fast')
                dummyi = system ('cd '//trim(adjustl(burn_tmpdir))//' && ./o2_fast 1>mblog.txt 2>&1')
                dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/TAPE6.OUT TAPE6_'//trim(adjustl(string1))//'.OUT');       
                dummyi = system ('mv '//trim(adjustl(burn_tmpdir))//'/TAPE7.OUT TAPE7_'//trim(adjustl(string1))//'.OUT')
            
                if (supp_flag == 1) then
                    if (i < 10) then
                        filen = trim(adjustl(tmpfile))//'TAPE9_'//trim(adjustl(string1))//'.IN'//trim(adjustl(string2))
                        dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(filen)))
                    else if (i < 100) then
                        filen = trim(adjustl(tmpfile))//'TAPE9_'//trim(adjustl(string1))//'.I'//trim(adjustl(string2))
                        dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(filen)))
                    else
                        filen = trim(adjustl(tmpfile))//'TAPE9_ct.'//trim(adjustl(string2))
                        dummyi = system ('cp TAPE9_'//trim(adjustl(string1))//'.INP '//trim(adjustl(filen)))
                    endif
                endif

                dummyi = system('rm -rf '//trim(adjustl(burn_tmpdir)))
            endif
        endif
    enddo
    
    print*, "got here3", rank

endif

print*, "got here4", rank
call MPI_BARRIER(icomm,ierr)
print*, "got here5", rank, ierr
call MPI_FINALIZE(ierr)

print*, "Jackkkkkkk"

end program parallel_burn

integer function getIarg(n)
    integer :: n
    character(80) :: string
    
    call getarg(n,string)
    read(string,*) getIarg
    return
end

